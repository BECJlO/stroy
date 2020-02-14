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
    
});

