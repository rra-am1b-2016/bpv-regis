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
            // 1-nameCompany, 5-streetName, 8-City, 3-nameContact, 4-mobileContact, 9-urlCompany
            var index = [1,5,8,3,4,9];
            
            // Zet een handvat op <tbody id="data">
            var table = document.getElementById("data");
            
            //console.log(data);
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
               select.urlCompany = data[i][9];

               var optionInnerHtml =      ["nog geen contact",
                                           "contact gezocht", 
                                           "contact bevestigd bedrijf", 
                                           "uitgenodigd voor gesprek", 
                                           "sollicitatiegesprek gehad", 
                                           "afgewezen", 
                                           "aangenomen"];
               for (var t=0; t < optionInnerHtml.length; t++) {
                    var option = document.createElement("option");
                    option.setAttribute("value", t);
                    option.innerHTML = optionInnerHtml[t];

                    if (data[i][13] == t) {
                        
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

   

   xhr.open("POST", "bpv_show_companies_data.php", true);
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhr.send();

});

function updateStatus(evt) {
       xhr.open("POST", "bpv_show_companies_data_update.php", true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.send("indexStatus=" + evt.target.options[evt.target.selectedIndex].value + 
                "&urlCompany=" + evt.target.urlCompany);
}