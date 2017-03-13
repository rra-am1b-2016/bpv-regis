$(document).ready(function () {
   var xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function ()
   {
     alert(xmlhttp.status + " | " + xmlhttp.readyState);
     alert(xmlhttp.HEADERS_RECEIVED);
      if ( ((xmlhttp.status == 200)) && xmlhttp.readyState == 4) {
         alert("response tekst: " + xmlhttp.responseText);
      }
   }

   document.getElementById("btn-register").onclick = function () {
      var stdnumber = document.getElementById("stdnumber").value;
      //var url = "www.bpv-regis.nl/register-data.php?id=" + stdnumber;
      var url = "register-data.php?id=" + stdnumber;
      console.log(url);
      xmlhttp.open("GET", url, true);
      //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();
      return false;
   }
});