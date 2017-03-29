$(document).ready(function () {
   //alert("Hoi");
   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function () {
      //alert(xhr.status + " | " + xhr.readyState);
      if ( xhr.status == 200 && xhr.readyState == 4) {
         if ( xhr.responseText === "succes_insert") {
            document.getElementById("succes_insert").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=home";
            }, 3000);
         } else if ( xhr.responseText === "duplicate_entry" ) {
            document.getElementById("duplicate_entry").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=bpv_form";
            }, 3000);
         }
      }
   } 

  
   var btn = document.getElementById("btn_bpv_form");

   



   btn.onclick = function () {
      
   var formArray = {"nameCompany" : document.getElementById("nameCompany").value,
                    "phoneNumberCompany" : document.getElementById("phoneNumberCompany").value,
                    "nameContact" : document.getElementById("nameContact").value,
                    "mobileContact" : document.getElementById("mobileContact").value,
                    "streetName" :  document.getElementById("streetName").value,
                    "houseNumber" : document.getElementById("houseNumber").value,
                    "postalcode" : document.getElementById("postalcode").value,
                    "city" : document.getElementById("city").value,
                    "urlCompany" : document.getElementById("urlCompany").value,
                    "emailContact" : document.getElementById("emailContact").value,
                    "whatToDo" : document.getElementById("whatToDo").value,
                    "dateTime" : document.getElementById("dateTime").value };

   var sendJsonString = JSON.stringify(formArray);
   
   console.log(formArray);
   console.log(sendJsonString);
  
   xhr.open("GET", "bpv_form_data.php?jsonstr=" + sendJsonString, true);
   //xhr.setRequestHeader();
   xhr.send();
      return false;
   }
});



