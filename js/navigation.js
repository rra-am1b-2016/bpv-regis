$(document).ready(function () {
   //alert("Hoi ik werk");

   // Maak een ajax object aan
   xhrNav = new XMLHttpRequest();
   xhrNav.onreadystatechange = function () {
      if (xhrNav.status == 200 && xhrNav.readyState == 4) {
         //alert(xhrNav.responseText);
         //$(".nav [class='active']").removeClass("active");
         $(".nav [href='./index.php?content=" + xhrNav.responseText + "']").css("background-color", "rgb(238, 238, 238)");
      }
   }

   xhrNav.open("POST", "navigation.php", true);
   xhrNav.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhrNav.send();




});