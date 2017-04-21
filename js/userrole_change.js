// Maak een Ajax object genaamd xhr...
var xhr = new XMLHttpRequest();

// jQuery zorgt ervoor dat de gehele pagina eerst wordt geladen...
$(document).ready(function () {   

   // Maak een variabele select voor de select tag...
   var select;

   // Koppel een onreadystatechange event aan het Ajax object
   xhr.onreadystatechange = function () {
      // Controleer of de status en readyState de waarde 200 en 4 hebben...
      if (xhr.status == 200 && xhr.readyState == 4) {
         
         // Zet de responseText om naar een array van javascriptobjecten
         var data = JSON.parse(xhr.responseText);
         console.log(data);
         // Haal van het array het eerste element af. Dit is de boodschap
         // Er blijft nog een array van array's over
         var message = data.shift();

         // Als de boodschap gelijk is aan succes_records_found...
         if ( message == "succes_records_found" ) {
            // Maak een array met alle velden die je wilt weergeven
            // 0-id, 1-firstname, 2-infix, 3-lastname, 6-activate, 7-userrole
            var index = [0,1,2,3,6];
            
            // Zet een handvat op <tbody id="data">
            var table = document.getElementById("data");
            
            console.log(data);
            // Doorloop alle opgehaalde records 
            for ( var i=0; i < data.length; i++ ) {
               // Maak een rij element...
               var tr = document.createElement("tr");

               // Voor een record doorloop je alle gekozen velden in index 
               for ( var j=0; j < index.length; j++) {
                  // Maak een td element...               
                  var td = document.createElement("td"); 
                  // Maak een tekst voor rij i, 
                  var text = document.createTextNode(data[i][index[j]]);
                  td.appendChild(text);

                  tr.appendChild(td);               
               }
               var td = document.createElement("td");
               var select = document.createElement("select");
               select.setAttribute("class", "form-control");
               select.addEventListener("change", updateStatus);
               select.userroleValue = data[i][7];
               console.log(data[i][7]);
               select.id = data[i][0];

               var optionInnerHtml =      ["student",
                                           "docent", 
                                           "admin", 
                                           "bpvco", 
                                           "root"];
               for (var t=0; t < optionInnerHtml.length; t++) {
                    var option = document.createElement("option");
                    option.setAttribute("value", optionInnerHtml[t]);
                    option.innerHTML = optionInnerHtml[t];

                    if (data[i][7] == option.innerHTML) {
                        
                        option.selected = true;
                    }
                    select.appendChild(option);
               }
               td.appendChild(select);
               tr.appendChild(td);
               table.appendChild(tr);
            }  // einde doorlopen opgehaalde records
        } else if (message == "error_nothing_found") {
            //alert( "error_nothing_found");
            document.getElementById("error_nothing_found").style.display = "block";
        }
      }
   }

   

   xhr.open("POST", "userrole_change_data.php", true);
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhr.send();

});

function updateStatus(evt) {
       xhr.open("POST", "userrole_change_data_update.php", true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.send("userrole=" + evt.target.options[evt.target.selectedIndex].value + 
                "&userroleValue=" + evt.target.userroleValue + "&id=" + evt.target.id);
}