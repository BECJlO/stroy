$(document).ready(function () {
  var menuOpened = false;
  $('.header__btn-menu').click(function(){
    if(!menuOpened){
      console.log(menuOpened);
      
      $('.header__menu-body').addClass('open');
      $('body').addClass('fixed');
      $(this).addClass('open');
      menuOpened = true;
    }else{
      console.log(menuOpened);
      
      $('.header__menu-body').removeClass('open');
      $('body').removeClass('fixed');
      $(this).removeClass('open');
      menuOpened = false;
    }
  })
	var benefitsItemsSwiper = new Swiper('.brands__slider', {
		//loop: true,
		slidesPerView: 3,
    spaceBetween: 0,
    loop: true,
		navigation: {
      nextEl: '.brands__slider-nav-next',
      prevEl: '.brands__slider-nav-prev',
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 30
			},
			480: {
				slidesPerView: 1,
				spaceBetween: 50
			},
			767: {
				slidesPerView: 1,
				spaceBetween: 50
			},
			1024: {
				slidesPerView: 2,
				spaceBetween: 55
			}
		}
  });
  $('.collections__categ-item').click(function(){
    var item = '.'+$(this).data('item');
    $('.collections__categ-item').removeClass('current');
    $('.collections__item').removeClass('active');
    $(item).addClass('active');
    $(this).addClass('current');
  });
  $('textarea').each(function () {
    this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
  }).on('input', function () {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
  });
});