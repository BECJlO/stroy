window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
$(document).ready(function() {
    $('.portfolio__slider-show-wrap').twentytwenty({
        default_offset_pct: 0.35,
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
        $(this).closest(".servise__item").children('.servise__item-content').toggle(selectedEffect, options, 500);
        if ($(this).closest(".servise__item").hasClass("open-block")) {
            $(this).closest(".servise__item").removeClass('open-block');
        } else {
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

    var reviewsSlider = new Swiper('.reviews__slider', {
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


});

