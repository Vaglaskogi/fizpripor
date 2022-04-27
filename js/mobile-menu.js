const body = document.querySelector("body");

bodyClassList = body.classList;

console.log(bodyClassList);

if (bodyClassList.contains("_mobile")) {
  let headerContent = document.querySelector(".header-container");
  headerContent.remove();
}
