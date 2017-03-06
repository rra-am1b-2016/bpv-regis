$(document).ready(function () {
   var xmlhttp = new XMLHttpRequest();




   document.getElementById("btn-register").onclick = function () {
      //alert("Hoi");
      xmlhttp.open("GET", "http://localhost/2016-2017/am1b/Blok%203/Web/bpv-regis/register-data.php?id=2", true)
      xmlhttp.send()
   }
});