/*function battat() {
  var div = document.getElementById("js-div");
  div.classList.toggle("d-none");
  div.classList.toggle("d-block");
}
*/
$(document).ready(function () {
  $("#btn1").click(function () {
    $("#js-div").slideToggle("slow");
  });
});