<?php
   // verwijder alle session variables
   session_unset(); 

   // vernietig de session 
   session_destroy();
   header("Location: index.php?content=home");
?>