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
      alert("Hoi");
      var stdnumber = document.getElementById("stdnumber").value;
      alert("http://localhost/2016-2017/am1b/Blok%203/Web/bpv-regis/register-data.php?id=" + stdnumber);
      console.log("http://localhost/2016-2017/am1b/Blok%203/Web/bpv-regis/register-data.php?id=" + stdnumber);
      xmlhttp.open("GET", "http://localhost/2016-2017/am1b/Blok%203/Web/bpv-regis/register-data.php?id=" + stdnumber, true)
      xmlhttp.send()
   }
});