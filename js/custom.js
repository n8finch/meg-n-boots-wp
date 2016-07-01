// external js: masonry.pkgd.js
//No Conflict
(function($) {

  //Add Masonry to index.php

  $('.grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
  });


  //Change out featured images

  var heroImage = document.getElementById('posts-hero-section');

  if ( heroImage !== null ) {

    if (heroImage.hasAttribute('data-image')) {
      var heroURL = heroImage.getAttribute('data-image');
      $("#posts-hero-section").backstretch(heroURL);
    }
  }


  //Hero Image Parallax
  $(function() {

      // Cache the Window object
      var $window = $(window);

      // Parallax Backgrounds
      // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

      $('section[data-type="background"]').each(function(){
          var $bgobj = $(this); // assigning the object

          $(window).scroll(function() {

              // Scroll the background at var speed
              // the yPos is a negative value because we're scrolling it UP!
              var yPos = -($window.scrollTop() / $bgobj.data('speed'));

              // Put together our final background position
              var coords = '50% '+ yPos + 'px';

              // Move the background
              $bgobj.css({ backgroundPosition: coords });

          }); // end window scroll
      });

  });


  //Hide and Unhide Sidebar Widget
  $(document).ready(function ($) {

    $("#sidebar-slider").on('click', function () {
      if ($("#primary-sidebar-widget").hasClass('hide') === true) {
        $("#primary-sidebar-widget").removeClass('hide');
      } else {
        $("#primary-sidebar-widget").addClass('hide');
      }
    });
  });




}(jQuery)); //end No Conflict
