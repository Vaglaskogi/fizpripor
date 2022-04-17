

const swiper = new Swiper('.swiper', {
  autoplay:{
    delay:3000,
  },
  loop: true,
  navigation: {
    nextEl: '.slider-button__next',
    prevEl: '.slider-button__prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },

});
