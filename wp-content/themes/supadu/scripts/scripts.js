

jQuery(document).ready(function(){

    //js / no-js flag --

    jQuery('html').removeClass('no-js').addClass('js');


    //Viewport class --

    var $breakpoint1 = 320, 
        $breakpoint2 = 480, 
        $breakpoint3 = 768, 
        $breakpoint4 = 1024, 
        $breakpoint5 = 1600;

    var setViewport = function(){

        var $viewport = jQuery(window).width();

        jQuery('html').removeClass("x-small, small, medium, large, x-large");

        if($viewport <= $breakpoint1){

            jQuery('html').addClass("x-small");

        } else if($viewport > $breakpoint1 && $viewport <= $breakpoint2){

            jQuery('html').addClass("small");

        } else if($viewport > $breakpoint2 && $viewport <= $breakpoint3){

            jQuery('html').addClass("medium");

        } else if($viewport > $breakpoint3 && $viewport <= $breakpoint4){

            jQuery('html').addClass("large");

        } else if($viewport >= $breakpoint5){

            jQuery('html').addClass("x-large");
        }

    }

    jQuery(window).resize(function(){

        setViewport();

    });

    setViewport();


    //Primary navigation --

    var showPrimaryNav = function(){

        jQuery("#primary_navigation").addClass("primary_navigation--active");

    }

    var hidePrimaryNav = function(){

        jQuery("#primary_navigation").removeClass("primary_navigation--active");

    }


    jQuery("#primary_navigation_trigger").on("click", function(){

        var $clicked = jQuery(this);

        if($clicked.hasClass("icon-menu")){

            showPrimaryNav();

            jQuery("#primary_navigation_trigger").removeClass("icon-menu").addClass("icon-close");

        } else {

            hidePrimaryNav();

            jQuery("#primary_navigation_trigger").removeClass("icon-close").addClass("icon-menu");

        }

    });


    if(jQuery('html').hasClass('x-small') || jQuery('html').hasClass('small')){

        hidePrimaryNav();

        jQuery("#primary_navigation_trigger").removeClass("icon-close").addClass("icon-menu");

    } else {
        
        //Hide when scrolling --

        jQuery(window).scroll(function(){

            if(jQuery(window).scrollTop() > 67){

                hidePrimaryNav();

                jQuery("#primary_navigation_trigger").show().removeClass("icon-close").addClass("icon-menu");

            } else {

                showPrimaryNav();

                jQuery("#primary_navigation_trigger").hide().removeClass("icon-menu").addClass("icon-close");
            }

        });

    }

    //References tooltip --

    jQuery(".reference").each(function(){

        var $ref = jQuery(this), $theReference = jQuery($ref.attr("href")).text();

        $ref.attr("title", $theReference );

        $ref.on("click", function(e){

            //e.preventDefault();

        });

    });

});









