<script>
/*!
 * bootstrap-star-rating v4.0.2
 * http://plugins.krajee.com/star-rating
 *
 * Author: Kartik Visweswaran
 * Copyright: 2013 - 2017, Kartik Visweswaran, Krajee.com
 *
 * Licensed under the BSD 3-Clause
 * https://github.com/kartik-v/bootstrap-star-rating/blob/master/LICENSE.md
 */
(function (factory) {
    
    //noinspection JSUnresolvedVariable
    if (typeof define === 'function' && define.amd) { 
	// jshint ignore:line
        // AMD. Register as an anonymous module.
        define(['jquery'], factory); // jshint ignore:line
    } else { // noinspection JSUnresolvedVariable
        if (typeof module === 'object' && module.exports) { // jshint ignore:line
            // Node/CommonJS
            // noinspection JSUnresolvedVariable
            module.exports = factory(require('jquery')); // jshint ignore:line
        } else {
            // Browser globals
            factory(window.jQuery);
        }
    }
}(function (jQuery) {
    "use strict";

    jQuery.fn.ratingLocales = {};
    jQuery.fn.ratingThemes = {};

    var jQueryh, Rating;

    // global helper methods and constants
    jQueryh = {
        NAMESPACE: '.rating',
        DEFAULT_MIN: 0,
        DEFAULT_MAX: 5,
        DEFAULT_STEP: 0.5,
        isEmpty: function (value, trim) {
            return value === null || value === undefined || value.length === 0 || (trim && jQuery.trim(value) === '');
        },
        getCss: function (condition, css) {
            return condition ? ' ' + css : '';
        },
        addCss: function (jQueryel, css) {
            jQueryel.removeClass(css).addClass(css);
        },
        getDecimalPlaces: function (num) {
            var m = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?jQuery/);
            return !m ? 0 : Math.max(0, (m[1] ? m[1].length : 0) - (m[2] ? +m[2] : 0));
        },
        applyPrecision: function (val, precision) {
            return parseFloat(val.toFixed(precision));
        },
        handler: function (jQueryel, event, callback, skipOff, skipNS) {
            var ev = skipNS ? event : event.split(' ').join(jQueryh.NAMESPACE + ' ') + jQueryh.NAMESPACE;
            if (!skipOff) {
                jQueryel.off(ev);
            }
            jQueryel.on(ev, callback);
        }
    };

    // rating constructor
    Rating = function (element, options) {
        var self = this;
        self.jQueryelement = jQuery(element);
        self._init(options);
    };
    Rating.prototype = {
        constructor: Rating,
        _parseAttr: function (vattr, options) {
            var self = this, jQueryel = self.jQueryelement, elType = jQueryel.attr('type'), finalVal, val, chk, out;
            if (elType === 'range' || elType === 'number') {
                val = options[vattr] || jQueryel.data(vattr) || jQueryel.attr(vattr);
                switch (vattr) {
                    case 'min':
                        chk = jQueryh.DEFAULT_MIN;
                        break;
                    case 'max':
                        chk = jQueryh.DEFAULT_MAX;
                        break;
                    default:
                        chk = jQueryh.DEFAULT_STEP;
                }
                finalVal = jQueryh.isEmpty(val) ? chk : val;
                out = parseFloat(finalVal);
            } else {
                out = parseFloat(options[vattr]);
            }
            return isNaN(out) ? chk : out;
        },
        _parseValue: function (val) {
            var self = this, v = parseFloat(val);
            if (isNaN(v)) {
                v = self.clearValue;
            }
            return (self.zeroAsNull && (v === 0 || v === '0') ? null : v);
        },
        _setDefault: function (key, val) {
            var self = this;
            if (jQueryh.isEmpty(self[key])) {
                self[key] = val;
            }
        },
        _initSlider: function (options) {
            var self = this, v = self.jQueryelement.val();
            self.initialValue = jQueryh.isEmpty(v) ? 0 : v;
            self._setDefault('min', self._parseAttr('min', options));
            self._setDefault('max', self._parseAttr('max', options));
            self._setDefault('step', self._parseAttr('step', options));
            if (isNaN(self.min) || jQueryh.isEmpty(self.min)) {
                self.min = jQueryh.DEFAULT_MIN;
            }
            if (isNaN(self.max) || jQueryh.isEmpty(self.max)) {
                self.max = jQueryh.DEFAULT_MAX;
            }
            if (isNaN(self.step) || jQueryh.isEmpty(self.step) || self.step === 0) {
                self.step = jQueryh.DEFAULT_STEP;
            }
            self.diff = self.max - self.min;
        },
        _initHighlight: function (v) {
            var self = this, w, cap = self._getCaption();
            if (!v) {
                v = self.jQueryelement.val();
            }
            w = self.getWidthFromValue(v) + '%';
            self.jQueryfilledStars.width(w);
            self.cache = {caption: cap, width: w, val: v};
        },
        _getContainerCss: function () {
            var self = this;
            return 'rating-container' +
                jQueryh.getCss(self.theme, 'theme-' + self.theme) +
                jQueryh.getCss(self.rtl, 'rating-rtl') +
                jQueryh.getCss(self.size, 'rating-' + self.size) +
                jQueryh.getCss(self.animate, 'rating-animate') +
                jQueryh.getCss(self.disabled || self.readonly, 'rating-disabled') +
                jQueryh.getCss(self.containerClass, self.containerClass);
        },
        _checkDisabled: function () {
            var self = this, jQueryel = self.jQueryelement, opts = self.options;
            self.disabled = opts.disabled === undefined ? jQueryel.attr('disabled') || false : opts.disabled;
            self.readonly = opts.readonly === undefined ? jQueryel.attr('readonly') || false : opts.readonly;
            self.inactive = (self.disabled || self.readonly);
            jQueryel.attr({disabled: self.disabled, readonly: self.readonly});
        },
        _addContent: function (type, content) {
            var self = this, jQuerycontainer = self.jQuerycontainer, isClear = type === 'clear';
            if (self.rtl) {
                return isClear ? jQuerycontainer.append(content) : jQuerycontainer.prepend(content);
            } else {
                return isClear ? jQuerycontainer.prepend(content) : jQuerycontainer.append(content);
            }
        },
        _generateRating: function () {
            var self = this, jQueryel = self.jQueryelement, jQueryrating, jQuerycontainer, w;
            jQuerycontainer = self.jQuerycontainer = jQuery(document.createElement("div")).insertBefore(jQueryel);
            jQueryh.addCss(jQuerycontainer, self._getContainerCss());
            self.jQueryrating = jQueryrating = jQuery(document.createElement("div")).attr('class', 'rating-stars').appendTo(jQuerycontainer)
                .append(self._getStars('empty')).append(self._getStars('filled'));
            self.jQueryemptyStars = jQueryrating.find('.empty-stars');
            self.jQueryfilledStars = jQueryrating.find('.filled-stars');
            self._renderCaption();
            self._renderClear();
            self._initHighlight();
            jQuerycontainer.append(jQueryel);
            if (self.rtl) {
                w = Math.max(self.jQueryemptyStars.outerWidth(), self.jQueryfilledStars.outerWidth());
                self.jQueryemptyStars.width(w);
            }
            jQueryel.appendTo(jQueryrating);
        },
        _getCaption: function () {
            var self = this;
            return self.jQuerycaption && self.jQuerycaption.length ? self.jQuerycaption.html() : self.defaultCaption;
        },
        _setCaption: function (content) {
            var self = this;
            if (self.jQuerycaption && self.jQuerycaption.length) {
                self.jQuerycaption.html(content);
            }
        },
        _renderCaption: function () {
            var self = this, val = self.jQueryelement.val(), html, jQuerycap = self.captionElement ? jQuery(self.captionElement) : '';
            if (!self.showCaption) {
                return;
            }
            html = self.fetchCaption(val);
            if (jQuerycap && jQuerycap.length) {
                jQueryh.addCss(jQuerycap, 'caption');
                jQuerycap.html(html);
                self.jQuerycaption = jQuerycap;
                return;
            }
            self._addContent('caption', '<div class="caption">' + html + '</div>');
            self.jQuerycaption = self.jQuerycontainer.find(".caption");
        },
        _renderClear: function () {
            var self = this, css, jQueryclr = self.clearElement ? jQuery(self.clearElement) : '';
            if (!self.showClear) {
                return;
            }
            css = self._getClearClass();
            if (jQueryclr.length) {
                jQueryh.addCss(jQueryclr, css);
                jQueryclr.attr({"title": self.clearButtonTitle}).html(self.clearButton);
                self.jQueryclear = jQueryclr;
                return;
            }
            self._addContent('clear',
                '<div class="' + css + '" title="' + self.clearButtonTitle + '">' + self.clearButton + '</div>');
            self.jQueryclear = self.jQuerycontainer.find('.' + self.clearButtonBaseClass);
        },
        _getClearClass: function () {
            var self = this;
            return self.clearButtonBaseClass + ' ' + (self.inactive ? '' : self.clearButtonActiveClass);
        },
        _toggleHover: function (out) {
            var self = this, w, width, caption;
            if (!out) {
                return;
            }
            if (self.hoverChangeStars) {
                w = self.getWidthFromValue(self.clearValue);
                width = out.val <= self.clearValue ? w + '%' : out.width;
                self.jQueryfilledStars.css('width', width);
            }
            if (self.hoverChangeCaption) {
                caption = out.val <= self.clearValue ? self.fetchCaption(self.clearValue) : out.caption;
                if (caption) {
                    self._setCaption(caption + '');
                }
            }
        },
        _init: function (options) {
            var self = this, jQueryel = self.jQueryelement.addClass('rating-input'), v;
            self.options = options;
            jQuery.each(options, function (key, value) {
                self[key] = value;
            });
            if (self.rtl || jQueryel.attr('dir') === 'rtl') {
                self.rtl = true;
                jQueryel.attr('dir', 'rtl');
            }
            self.starClicked = false;
            self.clearClicked = false;
            self._initSlider(options);
            self._checkDisabled();
            if (self.displayOnly) {
                self.inactive = true;
                self.showClear = false;
                self.showCaption = false;
            }
            self._generateRating();
            self._initEvents();
            self._listen();
            v = self._parseValue(jQueryel.val());
            jQueryel.val(v);
            return jQueryel.removeClass('rating-loading');
        },
        _initEvents: function () {
            var self = this;
            self.events = {
                _getTouchPosition: function (e) {
                    var pageX = jQueryh.isEmpty(e.pageX) ? e.originalEvent.touches[0].pageX : e.pageX;
                    return pageX - self.jQueryrating.offset().left;
                },
                _listenClick: function (e, callback) {
                    e.stopPropagation();
                    e.preventDefault();
                    if (e.handled !== true) {
                        callback(e);
                        e.handled = true;
                    } else {
                        return false;
                    }
                },
                _noMouseAction: function (e) {
                    return !self.hoverEnabled || self.inactive || (e && e.isDefaultPrevented());
                },
                initTouch: function (e) {
                    //noinspection JSUnresolvedVariable
                    var ev, touches, pos, out, caption, w, width, params, clrVal = self.clearValue || 0,
                        isTouchCapable = 'ontouchstart' in window ||
                            (window.DocumentTouch && document instanceof window.DocumentTouch);
                    if (!isTouchCapable || self.inactive) {
                        return;
                    }
                    ev = e.originalEvent;
                    //noinspection JSUnresolvedVariable
                    touches = !jQueryh.isEmpty(ev.touches) ? ev.touches : ev.changedTouches;
                    pos = self.events._getTouchPosition(touches[0]);
                    if (e.type === "touchend") {
                        self._setStars(pos);
                        params = [self.jQueryelement.val(), self._getCaption()];
                        self.jQueryelement.trigger('change').trigger('rating.change', params);
                        self.starClicked = true;
                    } else {
                        out = self.calculate(pos);
                        caption = out.val <= clrVal ? self.fetchCaption(clrVal) : out.caption;
                        w = self.getWidthFromValue(clrVal);
                        width = out.val <= clrVal ? w + '%' : out.width;
                        self._setCaption(caption);
                        self.jQueryfilledStars.css('width', width);
                    }
                },
                starClick: function (e) {
                    var pos, params;
                    self.events._listenClick(e, function (ev) {
                        if (self.inactive) {
                            return false;
                        }
                        pos = self.events._getTouchPosition(ev);
                        self._setStars(pos);
                        params = [self.jQueryelement.val(), self._getCaption()];
                        self.jQueryelement.trigger('change').trigger('rating.change', params);
                        self.starClicked = true;
                    });
                },
                clearClick: function (e) {
                    self.events._listenClick(e, function () {
                        if (!self.inactive) {
                            self.clear();
                            self.clearClicked = true;
                        }
                    });
                },
                starMouseMove: function (e) {
                    var pos, out;
                    if (self.events._noMouseAction(e)) {
                        return;
                    }
                    self.starClicked = false;
                    pos = self.events._getTouchPosition(e);
                    out = self.calculate(pos);
                    self._toggleHover(out);
                    self.jQueryelement.trigger('rating.hover', [out.val, out.caption, 'stars']);
                },
                starMouseLeave: function (e) {
                    var out;
                    if (self.events._noMouseAction(e) || self.starClicked) {
                        return;
                    }
                    out = self.cache;
                    self._toggleHover(out);
                    self.jQueryelement.trigger('rating.hoverleave', ['stars']);
                },
                clearMouseMove: function (e) {
                    var caption, val, width, out;
                    if (self.events._noMouseAction(e) || !self.hoverOnClear) {
                        return;
                    }
                    self.clearClicked = false;
                    caption = '<span class="' + self.clearCaptionClass + '">' + self.clearCaption + '</span>';
                    val = self.clearValue;
                    width = self.getWidthFromValue(val) || 0;
                    out = {caption: caption, width: width, val: val};
                    self._toggleHover(out);
                    self.jQueryelement.trigger('rating.hover', [val, caption, 'clear']);
                },
                clearMouseLeave: function (e) {
                    var out;
                    if (self.events._noMouseAction(e) || self.clearClicked || !self.hoverOnClear) {
                        return;
                    }
                    out = self.cache;
                    self._toggleHover(out);
                    self.jQueryelement.trigger('rating.hoverleave', ['clear']);
                },
                resetForm: function (e) {
                    if (e && e.isDefaultPrevented()) {
                        return;
                    }
                    if (!self.inactive) {
                        self.reset();
                    }
                }
            };
        },
        _listen: function () {
            var self = this, jQueryel = self.jQueryelement, jQueryform = jQueryel.closest('form'), jQueryrating = self.jQueryrating,
                jQueryclear = self.jQueryclear, events = self.events;
            jQueryh.handler(jQueryrating, 'touchstart touchmove touchend', jQuery.proxy(events.initTouch, self));
            jQueryh.handler(jQueryrating, 'click touchstart', jQuery.proxy(events.starClick, self));
            jQueryh.handler(jQueryrating, 'mousemove', jQuery.proxy(events.starMouseMove, self));
            jQueryh.handler(jQueryrating, 'mouseleave', jQuery.proxy(events.starMouseLeave, self));
            if (self.showClear && jQueryclear.length) {
                jQueryh.handler(jQueryclear, 'click touchstart', jQuery.proxy(events.clearClick, self));
                jQueryh.handler(jQueryclear, 'mousemove', jQuery.proxy(events.clearMouseMove, self));
                jQueryh.handler(jQueryclear, 'mouseleave', jQuery.proxy(events.clearMouseLeave, self));
            }
            if (jQueryform.length) {
                jQueryh.handler(jQueryform, 'reset', jQuery.proxy(events.resetForm, self), true);
            }
            return jQueryel;
        },
        _getStars: function (type) {
            var self = this, stars = '<span class="' + type + '-stars">', i;
            for (i = 1; i <= self.stars; i++) {
                stars += '<span class="star">' + self[type + 'Star'] + '</span>';
            }
            return stars + '</span>';
        },
        _setStars: function (pos) {
            var self = this, out = arguments.length ? self.calculate(pos) : self.calculate(), jQueryel = self.jQueryelement,
                v = self._parseValue(out.val);
            jQueryel.val(v);
            self.jQueryfilledStars.css('width', out.width);
            self._setCaption(out.caption);
            self.cache = out;
            return jQueryel;
        },
        showStars: function (val) {
            var self = this, v = self._parseValue(val);
            self.jQueryelement.val(v);
            return self._setStars();
        },
        calculate: function (pos) {
            var self = this, defaultVal = jQueryh.isEmpty(self.jQueryelement.val()) ? 0 : self.jQueryelement.val(),
                val = arguments.length ? self.getValueFromPosition(pos) : defaultVal,
                caption = self.fetchCaption(val), width = self.getWidthFromValue(val);
            width += '%';
            return {caption: caption, width: width, val: val};
        },
        getValueFromPosition: function (pos) {
            var self = this, precision = jQueryh.getDecimalPlaces(self.step), val, factor, maxWidth = self.jQueryrating.width();
            factor = (self.diff * pos) / (maxWidth * self.step);
            factor = self.rtl ? Math.floor(factor) : Math.ceil(factor);
            val = jQueryh.applyPrecision(parseFloat(self.min + factor * self.step), precision);
            val = Math.max(Math.min(val, self.max), self.min);
            return self.rtl ? (self.max - val) : val;
        },
        getWidthFromValue: function (val) {
            var self = this, min = self.min, max = self.max, factor, jQueryr = self.jQueryemptyStars, w;
            if (!val || val <= min || min === max) {
                return 0;
            }
            w = jQueryr.outerWidth();
            factor = w ? jQueryr.width() / w : 1;
            if (val >= max) {
                return 100;
            }
            return (val - min) * factor * 100 / (max - min);
        },
        fetchCaption: function (rating) {
            var self = this, val = parseFloat(rating) || self.clearValue, css, cap, capVal, cssVal, caption,
                vCap = self.starCaptions, vCss = self.starCaptionClasses;
            if (val && val !== self.clearValue) {
                val = jQueryh.applyPrecision(val, jQueryh.getDecimalPlaces(self.step));
            }
            cssVal = typeof vCss === "function" ? vCss(val) : vCss[val];
            capVal = typeof vCap === "function" ? vCap(val) : vCap[val];
            cap = jQueryh.isEmpty(capVal) ? self.defaultCaption.replace(/\{rating}/g, val) : capVal;
            css = jQueryh.isEmpty(cssVal) ? self.clearCaptionClass : cssVal;
            caption = (val === self.clearValue) ? self.clearCaption : cap;
            return '<span class="' + css + '">' + caption + '</span>';
        },
        destroy: function () {
            var self = this, jQueryel = self.jQueryelement;
            if (!jQueryh.isEmpty(self.jQuerycontainer)) {
                self.jQuerycontainer.before(jQueryel).remove();
            }
            jQuery.removeData(jQueryel.get(0));
            return jQueryel.off('rating').removeClass('rating rating-input');
        },
        create: function (options) {
            var self = this, opts = options || self.options || {};
            return self.destroy().rating(opts);
        },
        clear: function () {
            var self = this, title = '<span class="' + self.clearCaptionClass + '">' + self.clearCaption + '</span>';
            if (!self.inactive) {
                self._setCaption(title);
            }
            return self.showStars(self.clearValue).trigger('change').trigger('rating.clear');
        },
        reset: function () {
            var self = this;
            return self.showStars(self.initialValue).trigger('rating.reset');
        },
        update: function (val) {
            var self = this;
            return arguments.length ? self.showStars(val) : self.jQueryelement;
        },
        refresh: function (options) {
            var self = this, jQueryel = self.jQueryelement;
            if (!options) {
                return jQueryel;
            }
            return self.destroy().rating(jQuery.extend(true, self.options, options)).trigger('rating.refresh');
        }
    };

    jQuery.fn.rating = function (option) {
        var args = Array.apply(null, arguments), retvals = [];
        args.shift();
        this.each(function () {
            var self = jQuery(this), data = self.data('rating'), options = typeof option === 'object' && option,
                theme = options.theme || self.data('theme'), lang = options.language || self.data('language') || 'en',
                thm = {}, loc = {}, opts;
            if (!data) {
                if (theme) {
                    thm = jQuery.fn.ratingThemes[theme] || {};
                }
                if (lang !== 'en' && !jQueryh.isEmpty(jQuery.fn.ratingLocales[lang])) {
                    loc = jQuery.fn.ratingLocales[lang];
                }
                opts = jQuery.extend(true, {}, jQuery.fn.rating.defaults, thm, jQuery.fn.ratingLocales.en, loc, options, self.data());
                data = new Rating(this, opts);
                self.data('rating', data);
            }

            if (typeof option === 'string') {
                retvals.push(data[option].apply(data, args));
            }
        });
        switch (retvals.length) {
            case 0:
                return this;
            case 1:
                return retvals[0] === undefined ? this : retvals[0];
            default:
                return retvals;
        }
    };

    jQuery.fn.rating.defaults = {
        theme: '',
        language: 'en',
        stars: 5,
        filledStar: '<i class="fa fa-star"></i>',
        emptyStar: '<i class="fa fa-star-o"></i>',
        containerClass: '',
        size: 'sm',
        animate: true,
        displayOnly: true,
        rtl: false,
        showClear: false,
        showCaption: false,
        starCaptionClasses: {
            0.5: 'label label-danger',
            1: 'label label-danger',
            1.5: 'label label-warning',
            2: 'label label-warning',
            2.5: 'label label-info',
            3: 'label label-info',
            3.5: 'label label-primary',
            4: 'label label-primary',
            4.5: 'label label-success',
            5: 'label label-success'
        },
        clearButton: '<i class="glyphicon glyphicon-minus-sign"></i>',
        clearButtonBaseClass: 'clear-rating',
        clearButtonActiveClass: 'clear-rating-active',
        clearValue: null,
        captionElement: null,
        clearElement: null,
        hoverEnabled: true,
        hoverChangeCaption: true,
        hoverChangeStars: true,
        hoverOnClear: true,
        zeroAsNull: true
    };

    jQuery.fn.ratingLocales.en = {
        defaultCaption: '{rating} Stars',
        starCaptions: {
            0.5: 'Half Star',
            1: 'One Star',
            1.5: 'One & Half Star',
            2: 'Two Stars',
            2.5: 'Two & Half Stars',
            3: 'Three Stars',
            3.5: 'Three & Half Stars',
            4: 'Four Stars',
            4.5: 'Four & Half Stars',
            5: 'Five Stars'
        },
        clearButtonTitle: 'Clear',
        clearCaption: 'Not Rated'
    };

    jQuery.fn.rating.Constructor = Rating;

    /**
     * Convert automatically inputs with class 'rating' into Krajee's star rating control.
     */
    jQuery(document).ready(function () {
        var jQueryinput = jQuery('input.rating');
        if (jQueryinput.length) {
            jQueryinput.removeClass('rating-loading').addClass('rating-loading').rating();
        }
    });
}));
</script>