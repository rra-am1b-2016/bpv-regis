<?php
   if (isset($_SESSION["userrole"]))
   {
      switch ($_SESSION["userrole"]) {
         case "student" :
            echo "<li><a href='./index.php?content=invoer_stagebedrijf'>invoer stagebedrijf</a></li>";
            break;
         case "admin":
            break;
         case "docent":
            break;
         case "bpvco":
            break;
         case "root":
            break;
         default:
            break;
      }
      echo "<li><a href='./index.php?content=logout'>uitloggen</a></li>";
      
      
   } else {
      echo "<li><a href='./index.php?content=login_form'>inloggen</a></li>";
      echo "<li><a href='./index.php?content=register'>registreren</a></li>";

   }
?>