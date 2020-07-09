jQuery(function () {
  jQuery("#wpsm-team-list").sortable({ handle: '.wpsm-icon-draghandle' });
  jQuery(".wpsm-nav-item").on('click', function () {
    jQuery(".wpsm-nav-item").removeClass('active');
    jQuery(this).addClass('active');
  });
  
  jQuery('#wpsm-team-member-add').popover({
       
    placement: 'bottom',
    title: 'Popover Form',
    html:true,
    content:  jQuery('#myForm').html()
}).on('click', function(){
  // had to put it within the on click action so it grabs the correct info on submit
 
});


jQuery('#wpsm-team-member-add').click(function (e) {
  e.stopPropagation();
});
jQuery(document).click(function (e) {
  if ( jQuery(e.target).is('.closes')) {
      jQuery('#wpsm-team-member-add').popover('hide');
  }
});



jQuery(document).ready(function(jQuery){
  //open the lateral panel
  jQuery('#design-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-first').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-first').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-first') || jQuery(event.target).is('#cd-panel-close-first') ) { 
      jQuery('#cd-panel-first').removeClass('is-visible');
      event.preventDefault();
    }
  });

  //open social setting
  jQuery('#social-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-social').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-social').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-social') || jQuery(event.target).is('#cd-panel-close-social') ) { 
      jQuery('#cd-panel-social').removeClass('is-visible');
      event.preventDefault();
    }
  });


   //open font setting
  jQuery('#fontset-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-fontset').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-fontset').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-fontset') || jQuery(event.target).is('#cd-panel-close-fontset') ) { 
      jQuery('#cd-panel-fontset').removeClass('is-visible');
      event.preventDefault();
    }
  });

   //open display setting
  jQuery('#displayset-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-displayset').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-displayset').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-displayset') || jQuery(event.target).is('#cd-panel-close-displayset') ) { 
      jQuery('#cd-panel-displayset').removeClass('is-visible');
      event.preventDefault();
    }
  });


  //open Layout setting
  jQuery('#layoutset-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-layoutset').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-layoutset').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-layoutset') || jQuery(event.target).is('#cd-panel-close-layoutset') ) { 
      jQuery('#cd-panel-layoutset').removeClass('is-visible');
      event.preventDefault();
    }
  });

  //open Carousel setting
  jQuery('#carousel-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-carousel').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-carousel').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-carousel') || jQuery(event.target).is('#cd-panel-close-carousel') ) { 
      jQuery('#cd-panel-carousel').removeClass('is-visible');
      event.preventDefault();
    }
  });

//open Background setting
  jQuery('#background-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-background').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-background').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-background') || jQuery(event.target).is('#cd-panel-close-background') ) { 
      jQuery('#cd-panel-background').removeClass('is-visible');
      event.preventDefault();
    }
  });

//open Filter setting
  jQuery('#filter-toggle').on('click', function(event){
    event.preventDefault();
    jQuery('#cd-panel-filter').addClass('is-visible');
  });
  //clode the lateral panel
  jQuery('#cd-panel-filter').on('click', function(event){
    if( jQuery(event.target).is('#cd-panel-filter') || jQuery(event.target).is('#cd-panel-close-filter') ) { 
      jQuery('#cd-panel-filter').removeClass('is-visible');
      event.preventDefault();
    }
  });


});


});