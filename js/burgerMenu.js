let header__burger = document.querySelector(".header__burger");
let header_menu = document.querySelector(".header-container");
let back = document.querySelector("body");

header__burger.onclick = function () {
   header__burger.classList.toggle("activeMenu");
   header_menu.classList.toggle("activeMenu");
   back.classList.toggle("lock");
};
