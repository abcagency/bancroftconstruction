/*
* QuickAccord v1.0.0 Copyright (c) 2016 AJ Savino
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*/
var QuickAccord = {
	DATA_ATTR_TARGET:"data-accord-target",
	DATA_ATTR_GROUP:"data-accord-group",
	
	CLASS_EXPANDED:"expanded",
	CLASS_COLLAPSED:"collapsed",
	CLASS_ANIMATING:"is-animating",
};
(function(jQuery){
	jQuery.fn.QuickAccord = function(options){
		return this.filter("a,[" + QuickAccord.DATA_ATTR_TARGET + "]").each(function(){
			var _vars = {
				_jQuerythis:jQuery(this)
			};
			
			var _methods = {
				init:function(){
					var jQuerytrigger = _vars._jQuerythis;
					
					//Initialize aria attributes
					var ariaControls = null;
					var accordTarget = jQuerytrigger.attr(QuickAccord.DATA_ATTR_TARGET) || jQuerytrigger.attr("href") || null;
					if (accordTarget){
						var id = /^#(\w+)/i.exec(accordTarget);
						if (id){
							jQuerytrigger.attr("aria-controls", id[1]);
						}
					}
					
					if (!_methods.isExpanded()){ //Initially collapsed
						_methods.collapse();
					} else { //Initially expanded
						_methods.expand();
					}
					jQuerytrigger.off("click", _methods._handler_trigger_click);
					jQuerytrigger.on("click", _methods._handler_trigger_click);
				},
				
				destroy:function(){
					var jQuerytrigger = _vars._jQuerythis;
					jQuerytrigger.removeClass(CLASS_EXPANDED);
					jQuerytrigger.removeClass(CLASS_COLLAPSED);
					jQuerytrigger.removeAttr("aria-expanded");
					jQuerytrigger.removeAttr("aria-controls");
					jQuerytrigger.off("click", _methods._handler_trigger_click);
					
					var jQuerytargets = _methods._resolveTargets(jQuerytrigger);
					if (jQuerytargets){
						jQuerytargets.css("height", "auto");
						jQuerytargets.removeClass(QuickAccord.CLASS_EXPANDING);
						jQuerytargets.removeClass(QuickAccord.CLASS_EXPANDED);
						jQuerytargets.removeClass(QuickAccord.CLASS_COLLAPSING);
						jQuerytargets.removeClass(QuickAccord.CLASS_COLLAPSED);
						jQuerytargets.removeAttr("aria-expanded");
						jQuerytargets.each(function(){
							QuickAccord.TransitionHelper.offTransitionComplete(jQuery(this));
						});
					}
				},
				
				_handler_trigger_click:function(evt){
					evt.preventDefault();
					_methods.toggle();
					return false;
				},
				
				toggle:function(jQuerytrigger){
					if (_methods.isExpanded()){ //Collapse
						_methods.collapse(jQuerytrigger);
					} else { //Expand
						_methods.expand(jQuerytrigger);
					}
				},
				
				collapse:function(jQuerytrigger){
					jQuerytrigger = jQuerytrigger || _vars._jQuerythis;
					jQuerytrigger.removeClass(QuickAccord.CLASS_EXPANDED);
					jQuerytrigger.addClass(QuickAccord.CLASS_COLLAPSED);
					jQuerytrigger.attr("aria-expanded", "false");
					
					var jQuerytargets = _methods._resolveTargets(jQuerytrigger);
					if (!jQuerytargets){
						throw new Error("Could not resolve target");
					}
					jQuerytargets.each(function(){
						var jQuerytarget = jQuery(this);
						if (jQuerytarget.outerHeight() > 0){
							jQuerytarget.addClass(QuickAccord.CLASS_ANIMATING);
							QuickAccord.TransitionHelper.onTransitionComplete(jQuerytarget, _methods._handler_collapse_complete);
							jQuerytarget.css("height", "0");
						}
					});
					jQuerytargets.attr("aria-expanded", "false");
				},
				
				_handler_collapse_complete:function(evt){
					var jQuerytarget = jQuery(evt.target);
					QuickAccord.TransitionHelper.offTransitionComplete(jQuerytarget);
					jQuerytarget.removeClass(QuickAccord.CLASS_ANIMATING);
					jQuerytarget.removeClass(QuickAccord.CLASS_EXPANDED);
					jQuerytarget.addClass(QuickAccord.CLASS_COLLAPSED);
				},

				expand:function(jQuerytrigger){
					jQuerytrigger = jQuerytrigger || _vars._jQuerythis;
					jQuerytrigger.removeClass(QuickAccord.CLASS_COLLAPSED);
					jQuerytrigger.addClass(QuickAccord.CLASS_EXPANDED);
					jQuerytrigger.attr("aria-expanded", "true");
					
					var jQueryaccordGroupTriggers = null;
					var accordGroup = jQuerytrigger.attr(QuickAccord.DATA_ATTR_GROUP) || null;
					if (accordGroup){
						jQueryaccordGroupTriggers = jQuery("[" + QuickAccord.DATA_ATTR_GROUP + "='" + accordGroup + "']").filter("a,[" + QuickAccord.DATA_ATTR_TARGET + "]").not(jQuerytrigger);
						jQueryaccordGroupTriggers.each(function(){
							_methods.collapse(jQuery(this));
						});
					}
					
					var jQuerytargets = _methods._resolveTargets(jQuerytrigger);
					if (!jQuerytargets){
						throw new Error("Could not resolve target");
					}
					jQuerytargets.each(function(){
						var jQuerytarget = jQuery(this);
						var isExpanded = jQuerytarget.hasClass(QuickAccord.CLASS_EXPANDED) && !jQuerytarget.hasClass(QuickAccord.CLASS_ANIMATING);
						var currentHeight = jQuerytarget.outerHeight();
						jQuerytarget.css("height", "auto");
						var height = jQuerytarget.outerHeight();
						if (!isExpanded){
							jQuerytarget.addClass(QuickAccord.CLASS_ANIMATING);
							QuickAccord.TransitionHelper.onTransitionComplete(jQuerytarget, _methods._handler_expand_complete);
							jQuerytarget.css("height", currentHeight + "px");
						}
						jQuerytarget.css("height"); //This line allows break between setters. 0 to height vs auto to height.
						jQuerytarget.css("height", height + "px");
					});
					jQuerytargets.removeClass(QuickAccord.CLASS_COLLAPSED);
					jQuerytargets.addClass(QuickAccord.CLASS_EXPANDED);
					jQuerytargets.attr("aria-expanded", "true");
				},
				
				_handler_expand_complete:function(evt){
					var jQuerytarget = jQuery(evt.target);
					QuickAccord.TransitionHelper.offTransitionComplete(jQuerytarget);
					jQuerytarget.removeClass(QuickAccord.CLASS_ANIMATING);
					jQuerytarget.removeClass(QuickAccord.CLASS_COLLAPSED);
					jQuerytarget.addClass(QuickAccord.CLASS_EXPANDED);
				},
				
				isExpanded:function(jQuerytrigger){
					jQuerytrigger = jQuerytrigger || _vars._jQuerythis;
					if (jQuerytrigger.hasClass(QuickAccord.CLASS_COLLAPSED)){
						return false;
					} else if (jQuerytrigger.hasClass(QuickAccord.CLASS_EXPANDED)){
						return true;
					} else {
						var jQuerytargets = _methods._resolveTargets(jQuerytrigger);
						if (jQuerytargets && jQuerytargets.length){
							var jQueryfirstTarget = jQuery(jQuerytargets[0]);
							if (jQueryfirstTarget.hasClass(QuickAccord.CLASS_EXPANDED)){
								return true;
							} else if (jQueryfirstTarget.hasClass(QuickAccord.CLASS_COLLAPSED)){
								return false;
							}
						}
					}
					return false;
				},
				
				_resolveTargets:function(jQuerytrigger){
					var jQueryaccordTargets = null;
					var accordTarget = jQuerytrigger.attr(QuickAccord.DATA_ATTR_TARGET) || jQuerytrigger.attr("href") || null;
					if (accordTarget){
						jQueryaccordTargets = jQuery(accordTarget);
					}
					return jQueryaccordTargets;
				}
			};
			
			this.quickAccord = {
				init:_methods.init,
				destroy:_methods.destroy,
				toggle:_methods.toggle,
				collapse:_methods.collapse,
				expand:_methods.expand,
				isExpanded:_methods.isExpanded
			};
			_methods.init();
		});
	}
})(jQuery);
QuickAccord.TransitionHelper = (function(){
	var transitionEvent = null;
	var transitionPrefix = null;
	
	var transitionEvents = [["webkitTransition","webkitTransitionEnd","-webkit-"], ["transition","transitionend",""]];
	var transitionEventsLen = transitionEvents.length;
	for (var i = 0; i < transitionEventsLen; i++){
		if (typeof document.documentElement.style[transitionEvents[i][0]] !== typeof undefined){
			break;
		}
	}
	if (i != transitionEventsLen){
		transitionEvent = transitionEvents[i][1];
		transitionPrefix = transitionEvents[i][2];
	} //else not supported
	
	var _methods = {
		hasTransition:function(jQueryelement){
			var element = jQueryelement[0];
			if (typeof document.documentElement.currentStyle !== typeof undefined){ //IE
				return parseFloat(element.currentStyle[transitionPrefix + "transition-duration"]) > 0;
			} else {
				return parseFloat(window.getComputedStyle(element)[transitionPrefix + "transition-duration"]) > 0;
			}
		},
		onTransitionComplete:function(jQueryelement, callback){
			if (transitionEvent && _methods.hasTransition(jQueryelement)){
				jQueryelement.on(transitionEvent, callback);
			} else {
				callback({target:jQueryelement[0]});
			}
		},
		offTransitionComplete:function(jQueryelement, callback){
			if (transitionEvent){
				if (typeof callback !== typeof undefined){
					jQueryelement.off(transitionEvent, callback);
				} else {
					jQueryelement.off(transitionEvent);
				}
			}
		}
	};
	return _methods;
})();