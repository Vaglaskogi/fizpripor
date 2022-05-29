// Инициализация анимация для скролла и отключение для мобильных устройств
AOS.init({ disable: "mobile" });

// Настройки слайдера
document.addEventListener("DOMContentLoaded", function () {
   var splide = new Splide(".splide", {
      perPage: 1,
      rewind: true,
   });

   splide.mount();
});

// CheckMobile
if ("ontouchstart" in document.documentElement == true) {
   document.body.classList.add("_mobile");
} else {
   document.body.classList.add("_pc");
}

// Preloder
window.onload = function () {
   document.body.classList.add("loaded_hiding");
   window.setTimeout(function () {
      document.body.classList.add("loaded");
      document.body.classList.remove("loaded_hiding");
   }, 500);
};

// Аккардеон
$(document).ready(function () {
   $("#accordeon .headAcord").on("click", my_func);
});
function my_func() {
   $("#accordeon .hiddenAcord").not($(this).next());
   $(this).next().toggleClass("activeAcord");
}
