<?php
   if (isset($_SESSION["userrole"]))
   {
      echo "<li><a href='./index.php?content=invoer_stagebedrijf'>invoer stagebedrijf</a></li>";
      echo "<li><a href='./index.php?content=logout'>uitloggen</a></li>";
   } else {
      echo "<li><a href='./index.php?content=login_form'>inloggen</a></li>";
   }
?>