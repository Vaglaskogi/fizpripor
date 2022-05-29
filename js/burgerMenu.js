let header__burger = document.querySelector(".header__burger"); // Кнопка меню
let header_menu = document.querySelector(".header-container"); // Содержимое хедера
let header_submenu = document.querySelectorAll(".header-submenu"); // Элементы содержимого
let header_subsubmenu = document.querySelectorAll(".header-subsubmenu"); // Подэлементы содержимого
let header_menu__link = document.querySelectorAll(".header-menu__link"); // Ссылки
let backButtons = document.getElementsByClassName("header-submenu__backButton"); // Кнопка возврата
let back = document.querySelector("body"); //

// Скрипт для кнопки меню и блок body
header__burger.onclick = function () {
   header__burger.classList.toggle("activeMenu");
   header_menu.classList.toggle("activeMenu");
   back.classList.toggle("lock");
};

// Скрипт для кнопок хедера
const listArray = [...document.querySelectorAll(".header-menu__link")];
listArray.shift(1);
listArray.pop(1);
for (let i = 0; i < listArray.length; i++) {
   listArray[i].onclick = function () {
      header_submenu[i].parentElement.classList.toggle("activeSub");
   };
}

// Скрипт для кнопок подэлементов хедера
const listArraySub = [...document.querySelectorAll(".header-menu__list")];
let productChild = listArraySub[2].lastElementChild;
let subMenuSubList = productChild.querySelectorAll("p");
for (let i = 0; i < subMenuSubList.length; i++) {
   subMenuSubList[i].onclick = function () {
      header_subsubmenu[i].parentElement.classList.toggle("activeSub");
   };
}

// Скрипт для кнопки Назад
for (let i = 0; i < backButtons.length; i++) {
   backButtons[i].onclick = function () {
      let backButtonsParent = backButtons[i].parentElement.parentElement;
      if (backButtonsParent.classList.contains("activeSub")) {
         backButtonsParent.classList.remove("activeSub");
      }
   };
}
