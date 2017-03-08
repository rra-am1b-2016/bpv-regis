$(document).ready(function () {
   var xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function ()
   {
     alert(xmlhttp.status + " | " + xmlhttp.readyState);
      if ( xmlhttp.status == 200 && xmlhttp.readyState == 4) {
         alert("response tekst: " + xmlhttp.responseText);
      }
   }


   document.getElementById("btn-register").onclick = function () {
      var stdnumber = document.getElementById("stdnumber").value;
      var url = "http://localhost/2016-2017/am1b/Blok%203/Web/bpv-regis/register-data.php?id=" + stdnumber;
      console.log(url);
      xmlhttp.open("GET", url, true)
      xmlhttp.send()
   }
});