// Hier begint modal.js

// Get the modal
var modal = document.getElementById('myModal');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Hier begint canvas.js

var data = [];

// Maak een XMLHttpRequest() object
var xmlHttp = new XMLHttpRequest();

xmlHttp.onreadystatechange = function () {
   if ( xmlHttp.status == 200 && xmlHttp.readyState == 4)
   {
      //alert(xmlHttp.responseText);
      data = JSON.parse(xmlHttp.responseText);
      
      data.sort(function (a, b) {
         return a.numberOfContacts - b.numberOfContacts;
      });
      
      drawGraph();
   }

}

fetch_data();

// Sorteer je array op veld numberOfContacts




// Plak een handvat op het canvas
var canvas = document.getElementById("myCanvas");

// Maak een context object waarmee je objecten kunt maken
var ctx = canvas.getContext("2d");

function drawGraph () {
   // De lengte van het array data kun je opvragen met de property length
   var arrayLength = data.length;

   ctx.clearRect(0, 0, canvas.width, canvas.height);

   // Teken de staafdiagrammen
   for ( var i = 0; i < arrayLength; i++)
   {
      //alert("De waarde van i=" + i);
      var r, g, b;
      r = Math.floor(Math.random() * 255);
      g = Math.floor(Math.random() * 255);
      b = Math.floor(Math.random() * 255);
      var color = "rgb(" + r + ", " + g + ", " + b + ")";
      ctx.fillStyle = color;

      var x = 45 + i * 30;
      var y = 370;
      var dx = 20;
      var dy = -1 * data[i].numberOfContacts

      data[i].coordinates = {"x": x,
                             "y": y,
                             "dx": dx,
                             "dy": dy };

      ctx.fillRect(x, y, dx, dy);         
   }

   ctx.beginPath();
   // x-as tekenen 
      ctx.strokeStyle = "grey";
      ctx.lineWidth = 3;
      ctx.moveTo(15, 370 )
      ctx.lineTo(550, 370);
      ctx.stroke();
   ctx.closePath();


   ctx.beginPath();
   // y-as tekenen
      ctx.strokeStyle = "grey";
      ctx.moveTo(35, 30 )
      ctx.lineTo(35, 380);
      ctx.lineWidth = 3;
      ctx.stroke();
   ctx.closePath();

   // Schrijf de text langs de x-as
   ctx.fillStyle = "#090909";
   ctx.font = "14px Trebuchet MS";
   ctx.fillText("Leerlingen ->", 400, 390);

   // Schrijf de text langs de y-as
   ctx.save();
   ctx.translate(20, 200);
   ctx.rotate(-Math.PI/2);
   ctx.fillStyle = "#090909";
   ctx.font = "14px Trebuchet MS";
   ctx.fillText("Aantal geschikte bedrijven ->", 0, 0);
   ctx.restore();
}

setInterval(fetch_data, 1000);

function fetch_data () {
   // Geef aan waar de data opgehaald kan worden
   xmlHttp.open("GET", "./bpv_show_data.php", true);

   // Haal nu de data op
   xmlHttp.send();   
}



function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
      x: evt.clientX - rect.left,
      y: evt.clientY - rect.top
    };
  }

  canvas.addEventListener('mousemove', function(evt) {
    var mousePos = getMousePos(canvas, evt);
    //console.log('Mouse position: ' + mousePos.x + ',' + mousePos.y);

    for (var i = 0; i < data.length; i++)
    {
         if ( mousePos.x > data[i].coordinates.x &&
              mousePos.x < data[i].coordinates.x + data[i].coordinates.dx &&
              mousePos.y < data[i].coordinates.y &&
              mousePos.y > data[i].coordinates.y + data[i].coordinates.dy)
         {
               console.log("Mijn naam is: " + data[i].firstname);
               modal.style.display = "block";
               document.getElementById("image").setAttribute("src","./images/faces/" + data[i].id + ".jpg");               
               document.getElementById("image").setAttribute("alt", data[i].id + ".jpg");               
               document.getElementById("id").innerHTML = "ID: " + data[i].id;
               document.getElementById("firstname").innerHTML = "Naam: " + data[i].firstname;
               document.getElementById("numberOfContacts").innerHTML = "Aantal bedrijven: " + data[i].numberOfContacts;
               break;
         }
         modal.style.display = "none";
    }

  }, false);



