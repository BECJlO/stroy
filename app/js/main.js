$(document).ready(function() {
    //Smooth scrolling when clicking an anchor link
    var $root = $('html, body');
    $('a[href^="#"]').click(function() {
        var href = $.attr(this, 'href');
        $root.animate({
            scrollTop: $(href).offset().top
        }, 500, function() {
            window.location.hash = href;
        });
        return false;
    });
    $('.portfolio__slider-slider').twentytwenty({
        default_offset_pct: 0.35,
        no_overlay: true,
        before_label: '', // Set a custom before label
        after_label: '',
        click_to_move :  true,
        move_slider_on_hover: false,
        move_with_handle_only: false 
    });
    // $('.portfolio__slider-show-wrap').addClass('deactive');
    // $('.twentytwenty-wrapper.twentytwenty-horizontal').addClass('activeTab');
    $('.portfolio__slider-tab').click(function(){
        var thisTab = $(this);
        // console.log('[data-count="'+ thisTab.data('active-slide')+'"]');
        thisTab.closest('.portfolio__slider-show').children('.portfolio__slider-show-wrap').removeClass('activeTab');
        var nextSlide = thisTab.closest('.portfolio__slider-show').children('[data-count="'+ thisTab.data('active-slide')+'"]');
        
        // thisTab.closest('.portfolio__slider-show').children('.twentytwenty-wrapper.twentytwenty-horizontal').removeClass('activeTab');
        // nextSlide.closest('.twentytwenty-wrapper.twentytwenty-horizontal').addClass('activeTab');
        nextSlide.addClass('activeTab');
        nextSlide.children('.portfolio__slider-slider').twentytwenty({
            default_offset_pct: 0.35,
            no_overlay: true,
            before_label: '', // Set a custom before label
            after_label: '',
            click_to_move :  true,
            move_slider_on_hover: false,
            move_with_handle_only: false 
        });
    });

    $('.mobile-ab-show-wrap').twentytwenty({
        default_offset_pct: 0.5,
        no_overlay: true,
        before_label: '', // Set a custom before label
        after_label: '',
        move_slider_on_hover: false,
        move_with_handle_only: false
    });
    $('.header__hamb').click(function() {
        $('#header').toggleClass('open-menu')
    });
    $("#inputAreaSlider").slider({
        range: "min",
        value: 114,
        min: 10,
        max: 410,
        slide: function(event, ui) {
            $("#areaInput").val(ui.value);
        }
    });

    $("#areaInput").val($("#inputAreaSlider").slider("value"));

    $(".calc__input-block select").selectmenu();

    $('.servise__item').first().addClass('firstblock');
    $(".servise__item-header-btn").click(function() {
        var selectedEffect = 'blind';
        var options = {};
        // $('.servise__item-content').hide(500);
        // $(this).closest(".servise__item").children('.servise__item-content').toggle(selectedEffect, options, 500);
        if ($(this).closest(".servise__item").hasClass("open-block")) {
            // $(this).closest(".servise__item").children('.servise__item-content').slideUp(500)
            if($(this).closest(".servise__item").hasClass('open-block')){
                if($(this).closest(".servise__item").hasClass('firstblock')){
                    return false
                }
                $('.servise__item').first().addClass('open-block');
                // console.log('true');
            }
            $(this).closest(".servise__item").removeClass('open-block');
        } else {
            // $('.servise__item-content').slideUp(500);
            $('.servise__item').removeClass('open-block');
            // $(this).closest(".servise__item").children('.servise__item-content').slideDown(500)
            $(this).closest(".servise__item").addClass("open-block");
        }
    });
    var firstScreenSliderBack = new Swiper('.dec-slider', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        speed: 800,
        spaceBetween: 500,
        effect: 'fade',

        // Navigation arrows
        navigation: {
            nextEl: '.first__slider-next',
            prevEl: '.first__slider-prev',
        },

    });
    var firstScreenSliderFront = new Swiper('.first__slider', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
        speed: 800,
        spaceBetween: 300,
        effect: 'cube',


        // Navigation arrows
        navigation: {
            nextEl: '.first__slider-next',
            prevEl: '.first__slider-prev',
        },

        on: {
            slideChange: function(){
                $('.first__dots span').removeClass('yellow');
                var actislide = this.activeIndex;
                $('[data-as="'+actislide+'"]').addClass('yellow');
            }
        }

    });

    var binnerSimmilarSlider = new Swiper('.binner__similar-slider', {
        // Optional parameters
        // direction: 'vertical',
        // loop: true,
        speed: 800,
        slidesPerView: 1,
        spaceBetween: 95,
        // effect: 'cube',

        breakpoints: {
            1200: {
              slidesPerView: 2,
              spaceBetween: 95
            }
        },


        // Navigation arrows
        navigation: {
            nextEl: '.binner__similar-next',
            prevEl: '.binner__similar-prev',
        }

    });

    if ($(window).width() > 768) {
        window.onscroll = function() { fixHeader() };
        var header = document.getElementById("header");
        var sticky = header.offsetTop;
        var firstScr = document.getElementById("first");

        function fixHeader() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                firstScr.classList.add("fixHeader");
            } else {
                header.classList.remove("sticky");
                firstScr.classList.remove("fixHeader");
            }
        }
        var portfolio__slider = new Swiper('.portfolio__slider', {
            // Optional parameters
            direction: 'vertical',
            // loop: true,
            speed: 1500,
            spaceBetween: 300,
            resistance: false,
            simulateTouch: false,
            shortSwipes: false,
            longSwipes: false,

            // Navigation arrows
            navigation: {
                nextEl: '.portfolio__slider-next',
                prevEl: '.portfolio__slider-prev',
            }
        });
    }
    var reviewsSlzzzzzzzzzzzzzzider = new Swiper('.reviews__slider', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        speed: 1500,
        spaceBetween: 300,

        // Navigation arrows
        navigation: {
            nextEl: '.reviews__slider-next',
            prevEl: '.reviews__slider-prev',
        }
    });

    // $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
    //     _renderItem: function( ul, item ) {
    //       var li = $( "<li>" ),
    //         wrapper = $( "<div>", { text: item.label } );
   
    //       if ( item.disabled ) {
    //         li.addClass( "ui-state-disabled" );
    //       }
   
    //       $( "<span>", {
    //         style: item.element.attr( "data-style" ),
    //         "class": "ui-icon " + item.element.attr( "data-class" )
    //       })
    //         .appendTo( wrapper );
   
    //       return li.append( wrapper ).appendTo( ul );
    //     }
    //   });

    // $(".header__langswitch")
    //     .iconselectmenu()
    //     .iconselectmenu( "menuWidget")
    //     .addClass( "ui-menu-icons avatar" );
    
    // new WOW().init();

});