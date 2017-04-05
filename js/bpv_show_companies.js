var xhr = new XMLHttpRequest();
$(document).ready(function () {
   

   

   var select;

   xhr.onreadystatechange = function () {
      //alert(xhr.status +  " | "  + xhr.readyState);
      if (xhr.status == 200 && xhr.readyState == 4) {
         //alert(xhr.responseText);
         var data = JSON.parse(xhr.responseText);
         //console.log(data);
         var message = data.shift();

         console.log(data);
         // alert(message);
         if ( message == "succes_records_found" ) {
            // Maak een array met alle velden die je wilt weergeven
            // 1-nameCompany, 5-streetName, 8-City, 3-nameContact, 4-mobileContact, 9-urlCompany
            var index = [1,5,8,3,4,9];
            
            // Zet een handvat op <tbody id="data">
            var table = document.getElementById("data");
            
            // Doorloop alle opgehaalde records 
            for ( var i=0; i < data.length; i++ ) {
               // Maak een rij element...
               var tr = document.createElement("tr");

               // Voor een reocrd doorloop je alle gekozen velden in index 
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
               select.addEventListener("change", test, false );
               select.website = data[i][9];
               console.log(select);
               var optionInnerHtml =      ["nog geen contact",
                                           "contact gezocht", 
                                           "contact bevestigd bedrijf", 
                                           "uitgenodigd voor gesprek", 
                                           "sollicitatiegesprek gehad", 
                                           "afgewezen", 
                                           "aangenomen"];
               for (var t=0; t < 6; t++) {
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

function test(evt) {
       console.log(evt.target.options[evt.target.selectedIndex].value);
       alert("Naamwebsite: " + evt.target.options[evt.target.selectedIndex].text);
       xhr.open("POST", "bpv_show_companies_data_update.php", true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.send("urlCompany=" + evt.target.website);
}