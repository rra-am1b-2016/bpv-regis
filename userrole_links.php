<?php
   if (isset($_SESSION["userrole"]))
   {
      switch ($_SESSION["userrole"]) {
         case "student" :
            echo "<li><a href='./index.php?content=bpv_form'>bpv-bedrijf invoeren</a></li>";
            echo "<li><a href='./index.php?content=bpv_show'>bpv-bedrijven weergeven</a></li>";
            echo "<li><a href='./index.php?content=bpv_show_companies'>ingevoerde bedrijven</a></li>";          
            break;
         case "admin":
            break;
         case "docent":
            break;
         case "bpvco":
            break;
         case "root":
            echo "<li><a href='./index.php?content=userrole_change'>userrole change</a></li>";          
            break;
         default:
            break;
      }
      echo "<li><a href='./index.php?content=logout'>
                  <span class='glyphicon glyphicon-log-in'>
                  </span>uitloggen
                  </a>
            </li>";      
   } else {
      echo "<li><a href='./index.php?content=login_form'>
                  <span class='glyphicon glyphicon-log-in'>
                  </span>inloggen
                </a>
            </li>";
      echo "<li><a href='./index.php?content=register'>
                   <span class='glyphicon glyphicon-user'></span>
                        registreren
                </a>
            </li>";
   }
