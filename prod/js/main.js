$(document).ready(function(){function e(){window.pageYOffset>s?(t.classList.add("sticky"),r.classList.add("fixHeader")):(t.classList.remove("sticky"),r.classList.remove("fixHeader"))}var i=$("html, body");$('a[href^="#"]').click(function(){var e=$.attr(this,"href");return i.animate({scrollTop:$(e).offset().top},500,function(){window.location.hash=e}),!1}),$(".portfolio__slider-show-wrap").twentytwenty({default_offset_pct:.35,no_overlay:!1,before_label:"",after_label:"",move_slider_on_hover:!1,move_with_handle_only:!1}),$(".mobile-ab-show-wrap").twentytwenty({default_offset_pct:.5,no_overlay:!1,before_label:"",after_label:"",move_slider_on_hover:!1,move_with_handle_only:!1}),$(".header__hamb").click(function(){$("#header").toggleClass("open-menu")}),$("#inputAreaSlider").slider({range:"min",value:114,min:10,max:410,slide:function(e,i){$("#areaInput").val(i.value)}}),$("#areaInput").val($("#inputAreaSlider").slider("value")),$(".calc__input-block select").selectmenu(),$(".servise__item-header-btn").click(function(){$(this).closest(".servise__item").hasClass("open-block")?($(this).closest(".servise__item").children(".servise__item-content").slideUp(500),$(this).closest(".servise__item").removeClass("open-block")):($(".servise__item-content").slideUp(500),$(".servise__item").removeClass("open-block"),$(this).closest(".servise__item").children(".servise__item-content").slideDown(500),$(this).closest(".servise__item").addClass("open-block"))});new Swiper(".dec-slider",{loop:!0,speed:800,spaceBetween:500,effect:"fade",navigation:{nextEl:".first__slider-next",prevEl:".first__slider-prev"}}),new Swiper(".first__slider",{direction:"vertical",loop:!0,speed:800,spaceBetween:300,effect:"cube",navigation:{nextEl:".first__slider-next",prevEl:".first__slider-prev"}}),new Swiper(".binner__similar-slider",{speed:800,slidesPerView:1,spaceBetween:95,breakpoints:{1200:{slidesPerView:2,spaceBetween:95}},navigation:{nextEl:".binner__similar-next",prevEl:".binner__similar-prev"}});if($(window).width()>768){window.onscroll=function(){e()};var t=document.getElementById("header"),s=t.offsetTop,r=document.getElementById("first");new Swiper(".portfolio__slider",{direction:"vertical",loop:!0,speed:1500,spaceBetween:300,navigation:{nextEl:".portfolio__slider-next",prevEl:".portfolio__slider-prev"}})}new Swiper(".reviews__slider",{loop:!0,speed:1500,spaceBetween:300,navigation:{nextEl:".reviews__slider-next",prevEl:".reviews__slider-prev"}})});