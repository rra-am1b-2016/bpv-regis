$(document).ready(function () {
   // Plaats een handvat op de button
   var btn = document.getElementById("btn_signIn");
   

   // Ik heb nu mijn Ajax object
   xhr = new XMLHttpRequest();

   xhr.onreadystatechange  = function () {
      alert(xhr.status + " | "  + xhr.readyState);
      if ( xhr.status == 200 && xhr.readyState == 4) {
         alert(xhr.responseText);
         switch (xhr.responseText.trim())
         {
            case "student":
               window.location.href = "index.php?content=student_home";
               break;
            case "bpvco":
               window.location.href = "index.php?content=bpvco_home";
               break;
            case "docent":
               window.location.href = "index.php?content=docent_home";
               break;
            case "admin":
               window.location.href = "index.php?content=admin_home";
               break;
            case "root":
               window.location.href = "index.php?content=root_home";
               break;
            case "error_id":
               document.getElementById("error_id").style.display = "Block";
               setTimeout(function () {
               window.location.href = "index.php?content=login_form";               
               }, 3000);
               break;
            case "error_pw":
               document.getElementById("error_pw").style.display = "Block";
               setTimeout(function () {
               window.location.href = "index.php?content=login_form";               
               }, 3000);
               break;
            case "error_activate":
               document.getElementById("error_activate").style.display = "Block";
               setTimeout(function () {
               window.location.href = "index.php?content=login_form";               
               }, 3000)    
               break;
            case "error_no_mail_send":
               document.getElementById("error_no_mail_send").style.display = "Block";
               setTimeout(function () {
               window.location.href = "index.php?content=register";               
               }, 3000)
               break;
               
         }
         /*
         if ( xhr.responseText.trim() == "student") {
            window.location.href = "index.php?content=student_home";
         } else if (xhr.responseText.trim() == "error_id") {
            document.getElementById("error_id").style.display = "Block";
            setTimeout(function () {
               window.location.href = "index.php?content=login_form";               
            }, 3000)
         } else if (xhr.responseText.trim() == "error_pw") {
            document.getElementById("error_pw").style.display = "Block";
            setTimeout(function () {
               window.location.href = "index.php?content=login_form";               
            }, 3000)
         } else if (xhr.responseText.trim() == "error_activate") {
            document.getElementById("error_activate").style.display = "Block";
            setTimeout(function () {
               window.location.href = "index.php?content=login_form";               
            }, 3000)
         } else if (xhr.responseText.trim() == "error_no_mail_send") {
            document.getElementById("error_no_mail_send").style.display = "Block";
            setTimeout(function () {
               window.location.href = "index.php?content=register";               
            }, 3000)
         } 
         */
      }
   }


   // Zet er een click event op
   btn.onclick =  function () {

      var id = document.getElementById("inputStdNumber").value;
      var pw = document.getElementById("inputPassword").value;
      console.log(pw + id);

      //Vertel waar de data gevonden kan worden
      xhr.open("POST", "login_form_data.php", true);

      // set de header
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      // Maak contact met de login_form_data.php pagina
      xhr.send("id=" + id + "&pw=" + pw)

      // Dit is superbelangrijk. return false voorkomt dat het formulier de gegevens verstuurt
      // en daarmee je ajax responseText gaat tegenwerken en foutmeldingen laat geven.
      return false;
   };
});