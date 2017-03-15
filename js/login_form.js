$(document).ready(function () {
   // Plaats een handvat op de button
   var btn = document.getElementById("btn_signIn");
   var id = document.getElementById("inputStdNumber").value;
   var pw = document.getElementById("inputPassword").value;
   

   // Ik heb nu mijn Ajax object
   xhr = new XMLHttpRequest();

   xhr.onreadystatechange  = function () {
      if ( xhr.status == 200 && xhr.readyState == 4) {
         alert(xhr.responseText);
      }
   }


   // Zet er een click event op
   btn.onclick =  function () {
      //Vertel waar de data gevonden kan worden
      xhr.open("GET", "login_form_data.php?id=" + id + "&pw=" + pw, true);

      // Maak contact met de login_form_data.php pagina
      xhr.send()

      // Dit is superbelangrijk. return false voorkomt dat het formulier de gegevens verstuurt
      // en daarmee je ajax responseText gaat tegenwerken en foutmeldingen laat geven.
      return false;
   };
});