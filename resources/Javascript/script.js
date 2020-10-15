$(document).ready(function() {
    
    
    /*Sticky Navigation*/
    $('.js--section-features').waypoint(function(direction){ /*a function is a variable that can either be named or anonymous. Any function can be assigned to a variable or passed to a method, but passing member functions this way can cause them to be caleld in the context of another object*/ /*direction detects if the user is scrolling down the page or scrolling up*/ /*Waypoints is the easiest way to trigger a function when you scroll to an element.*/
        if(direction=="down"){
            $('nav').addClass('sticky'); /*addClass() method adds one or more class names to the selected elements. This does not remove existing class attributes, it only adds one or more class names to the class attribute*/
        } else{
            $('nav').removeClass('sticky'); /*remove class removes one or more class names from the selected elements*/
        }
    }, {
        offset: '60px;'
    })
    
    /*Scroll on buttons*/
    $('.js--scroll-to-plans').click(function () { /*we select this class (the button full class) using the click function*/
        $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000); 
        
        /*we have an animation that scrolls to the top of the section plans class with a speed of 1 second*/ 
        /*scrollTop() method sets or returns the vertical scrollbar position for the selected elements. Can be used to the return the vertical position of the scrollbar for the FIRST matched element, or sets the vertical position of hte scrollbar for ALL matched elements*/ 
            /*syntax = $(selector).scrollTop(blank or position)*/
        /*animate() is used to create custom animations https://www.w3schools.com/jquery/jquery_animate.asp*/
        
        /*The code above means that when the button is clicked, the website will automatically scroll to the top of the section at a speed of 1000milliseconds*/
    });
    
    $('.js--scroll-to-start').click(function () { /*we select this class (the button full class) using the click function*/
        $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);
        
        /*we have an animation that scrolls to the top of the section plans class with a speed of 1 second*/ 
        /*scrollTop() method sets or returns the vertical scrollbar position for the selected elements. Can be used to the return the vertical position of the scrollbar for the FIRST matched element, or sets the vertical position of the scrollbar for ALL matched elements*/ 
            /*syntax = $(selector).scrollTop(blank or position)*/
        /*animate() is used to create custom animations https://www.w3schools.com/jquery/jquery_animate.asp*/
        
        /*The code above means that when the button is clicked, the website will automatically scroll to the top of the section at a speed of 1000milliseconds*/
        
    });
    
    /*Navigation scroll*/ /*Taken from https://css-tricks.com/snippets/jquery/smooth-scrolling/*/
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });

    /*$('h1').click(function() {
        $(this).css('background-color', '#ff0000')*/ /*this Selects the current HTML element*/ /*click simulates a mouse click on an element*/ /*The css() method sets or returns one or more style properties for the selected elements.*/
   /* })*/
    
    /*var waypoints = $('#handler-first').waypoint(function(direction) {
        notify(this.element.id + ' hit 25% from top of window') 
    }, {
        offset: '25%'
    })

*/
    
    /*Animations on scroll*/
    $('.js--wp-1').waypoint(
        (direction) => {
            $('.js--wp-1').addClass('animate__animated animate__fadeIn'); /*class taken from CSS animations https://animate.style/*/
        }, 
        {
            offset: '50%'
        }
    );
    $('.js--wp-2').waypoint(
        (direction) => {
            $('.js--wp-2').addClass('animate__animated animate__fadeInUp'); /*class taken from CSS animations https://animate.style/*/
        }, 
        {
            offset: '60%'
        }
    );
    $('.js--wp-3').waypoint(
        (direction) => {
            $('.js--wp-3').addClass('animate__animated animate__fadeIn'); /*class taken from CSS animations https://animate.style/*/
        }, 
        {
            offset: '60%'
        }
    );
    $('.js--wp-4').waypoint(
        (direction) => {
            $('.js--wp-4').addClass('animate__animated animate__pulse'); /*class taken from CSS animations https://animate.style/*/
        }, 
        {
            offset: '50%'
        }
    );
    
    /*Mobile Navigation*/
    
    $('.js--nav-icon').click(function(){
        
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        $(nav).toggle('slide', {direction:'right'}, 200); /*uses jquery ui*/
        
        if(icon.hasClass('ion-navicon-round')){
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round')
        } else{
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round')
        } /*hasclass checks if any of the selected elements have a specified class name*/
       /* nav.slideToggle(200)*/ /*slidetoggle method toggles between slideup and slidedown for the selected methods*/ /*https://www.w3schools.com/jquery/eff_slidetoggle.asp*/
               
    })
    
    /*Back to top button*/
    
    $(window).scroll(function(){
        
        var height = $(window).scrollTop();
        var top = $('.back2top');
        
        if(height>2000){
            $(top).fadeIn(); /*fadeIn gradually changes the opacity for selected elements, from hidden to visible*/
        } else{
            $(top).fadeOut(); /*fadeOut gradually changes the opacity for selected elements, from visible to hidden*/
        }
        
    })
    
    $(document).ready(function(){ /*a page can't be manipulated safely until the document is "ready". JQuery detects this stae of readiness for you. Code inside the  $(document).ready(function() will only run once the page DOM is ready for JavaScript code to execute */
        
        var height = $(window).scrollTop();
        var top = $('.back2top');
        
        $(top).click(function(){
            $("html, body").animate({scrollTop: 0}, 1000);
            return false; /*whenever an event happens on an element, that event is triggered on every single parent element as well. return false prevents that event from propagating (or “bubbling up”) the DOM: https://css-tricks.com/return-false-and-prevent-default/*/
        });
        
        
    });
    

    
}); /*ensures that document can only be run after th code has been loaded*/