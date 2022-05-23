const body = document.querySelector("body");
const animates = document.querySelectorAll(".aos-init");

bodyClassList = body.classList;

console.log(animates);

if (bodyClassList.contains("_mobile")) {
  for (let i = 0; i < 10; i++) {
    body.classList.remove("aos-init");
    console.log(animates);
  }
  let headerOld = document.querySelector(".header");
  headerOld.remove();
}
