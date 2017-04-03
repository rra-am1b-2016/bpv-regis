$(document).ready(function () {
   

   var xhr = new XMLHttpRequest();


   xhr.onreadystatechange = function () {
      //alert(xhr.status +  " | "  + xhr.readyState);
      if (xhr.status == 200 && xhr.readyState == 4) {
         //alert(xhr.responseText);
         var data = JSON.parse(xhr.responseText);
         //console.log(data);
         var message = data.shift();
         // alert(message);
         if ( message == "succes_records_found" ) {
            var index = [1,5,8,3,4];
            var table = document.getElementById("data");

            for ( var i=0; i < data.length; i++ ) {
               var tr = document.createElement("tr");
               for ( var j=0; j < index.length; j++) {               
                  var td = document.createElement("td"); 
                  var text = document.createTextNode(data[i][index[j]]);
                  td.appendChild(text);

                  tr.appendChild(td);               
               }
               var td = document.createElement("td");
               var select = document.createElement("select");
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
                    select.appendChild(option);
               }
               td.appendChild(select);
               tr.appendChild(td);
               table.appendChild(tr);
            }
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