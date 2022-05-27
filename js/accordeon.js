$(document).ready(function () {
   $("#accordeon .headAcord").on("click", my_func);
});
function my_func() {
   $("#accordeon .hiddenAcord").not($(this).next());
   $(this).next().toggleClass("activeAcord");
}
