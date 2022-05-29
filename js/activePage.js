switch (window.location.pathname) {
   case "/index.php":
   case "/":
      addLineToActivePage(0);
      break;
   case "/projects.php":
   case "/soc-respons.php":
   case "/licenses.php":
      addLineToActivePage(1);
      break;
   case "/ktsnpl.php":
      addLineToActivePage(2);
      break;
   case "/photopage.php":
   case "/news.php":
      addLineToActivePage(3);
      break;
   case "/contacts.php":
      addLineToActivePage(4);
      break;
   default:
      console.log("on no...");
      break;
}

function addLineToActivePage(page) {
   let menuLinks = document.querySelectorAll(".header-menu__link");
   let activeLine = document.createElement("div");
   activeLine.classList.add("header-menu__activeLine");

   if (page == 1) {
      activeLine.style.width = "93px";
   } else if (page == 2) {
      activeLine.style.width = "100px";
   } else if (page == 3) {
      activeLine.style.width = "58px";
   }
   menuLinks[page].after(activeLine);
}
