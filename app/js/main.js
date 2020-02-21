window.onscroll = function() { fixHeader() };

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
    $('.portfolio__slider-show-wrap').twentytwenty({
        default_offset_pct: 0.35,
        no_overlay: false,
        before_label: '', // Set a custom before label
        after_label: '',
        move_slider_on_hover: false,
        move_with_handle_only: false
    });
    $('.mobile-ab-show-wrap').twentytwenty({
        default_offset_pct: 0.5,
        no_overlay: false,
        before_label: '', // Set a custom before label
        after_label: '',
        move_slider_on_hover: false,
        move_with_handle_only: false
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

    $(".servise__item-header-btn").click(function() {
        var selectedEffect = 'blind';
        var options = {};
        // $('.servise__item-content').hide(500);
        // $(this).closest(".servise__item").children('.servise__item-content').toggle(selectedEffect, options, 500);
        if ($(this).closest(".servise__item").hasClass("open-block")) {
            $(this).closest(".servise__item").children('.servise__item-content').slideUp(500)
            $(this).closest(".servise__item").removeClass('open-block');
        } else {
            $('.servise__item-content').slideUp(500);
            $('.servise__item').removeClass('open-block');
            $(this).closest(".servise__item").children('.servise__item-content').slideDown(500)
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
        }

    });

    if ($(window).width() > 768) {

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
            loop: true,
            speed: 1500,
            spaceBetween: 300,

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
    // new WOW().init();

});