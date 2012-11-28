$(document).ready(function(){
  var toggleBtn = $("#navbtn");
  if (toggleBtn.length > 0) {
  $("#navbtn").click(function(){
      $("body").toggleClass("active");
      	return false;
    });
  }
});
