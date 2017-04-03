$(document).ready(function () {
   var xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function ()
   {
     //alert(xmlhttp.status + " | " + xmlhttp.readyState);
      if ( ((xmlhttp.status == 200)) && xmlhttp.readyState == 4) {
        //alert(xmlhttp.responseText.trim());
         if ( xmlhttp.responseText.trim() == "succes") {
           document.getElementById("is_now_registered").style.display = "block";

           setTimeout(function () {
             window.location.href = "index.php?content=login_form";
           }, 4000);

         } else if (xmlhttp.responseText.trim() == "al geactiveerd") {
           document.getElementById("is_already_registered").style.display = "block"; 
            setTimeout(function () {
             window.location.href = "index.php?content=login_form";
           }, 4000);    
         } else if (xmlhttp.responseText.trim() == "studentnummer_error") {
           document.getElementById("studentnumber_error").style.display = "block"; 
            setTimeout(function () {
             window.location.href = "index.php?content=register";
           }, 4000);    
         } else if (xmlhttp.responseText.trim() == "id_error") {
           document.getElementById("id_error").style.display = "block"; 
            setTimeout(function () {
             window.location.href = "index.php?content=register";
           }, 4000);    
         } 
      }
   }

   document.getElementById("btn-register").onclick = function () {
      var stdnumber = document.getElementById("stdnumber").value;
      var url = "register-data.php?id=" + stdnumber;
      console.log(url);
      xmlhttp.open("GET", url, true);
      //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();
      return false;
   }

   $("[data-toggle='tooltip']").tooltip({"html": true, "placement": "right"});
});