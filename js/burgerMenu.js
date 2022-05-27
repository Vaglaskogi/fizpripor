let header__burger = document.querySelector(".header__burger");
let header_menu = document.querySelector(".header-container");

let header_submenu = document.querySelectorAll(".header-submenu");
let header_subsubmenu = document.querySelectorAll(".header-subsubmenu");
let header_menu__link = document.querySelectorAll(".header-menu__link");

let backButtons = document.getElementsByClassName("header-submenu__backButton");

let back = document.querySelector("body");

const listArray = [...document.querySelectorAll(".header-menu__link")];
listArray.shift(1);
listArray.pop(1);
for (let i = 0; i < listArray.length; i++) {
   listArray[i].onclick = function () {
      header_submenu[i].parentElement.classList.toggle("activeSub");
   };
}

const listArraySub = [...document.querySelectorAll(".header-menu__list")];
let productChild = listArraySub[2].lastElementChild;
let subMenuSubList = productChild.querySelectorAll("p");
console.log(subMenuSubList);
for (let i = 0; i < subMenuSubList.length; i++) {
   subMenuSubList[i].onclick = function () {
      header_subsubmenu[i].parentElement.classList.toggle("activeSub");
   };
}

header__burger.onclick = function () {
   header__burger.classList.toggle("activeMenu");
   header_menu.classList.toggle("activeMenu");
   back.classList.toggle("lock");
};

for (let i = 0; i < backButtons.length; i++) {
   backButtons[i].onclick = function () {
      let backButtonsParent = backButtons[i].parentElement.parentElement;
      if (backButtonsParent.classList.contains("activeSub")) {
         backButtonsParent.classList.remove("activeSub");
      }
   };
}
