<?php
   // Maak contact met de mysql server
   include("./connect_db.php");

   // Maak een select query op basis van gegeven e-mailadres en wachtwoord. 
   $sql = "SELECT * 
           FROM `users` 
           WHERE `id` = '".$_GET["id"]."'
           AND   `password` = '".sha1($_GET["password"])."'";
   //echo $sql; exit();
   // Vuur de query af op de database
   $result = mysqli_query($conn, $sql);
   
   // Als het record gevonden is...
   if ( mysqli_num_rows($result) > 0 )
   {
      $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
      //var_dump($record);
      
      $_SESSION["id"] = $record["id"];
      $_SESSION["userrole"] = $record["userrole"];
      switch($record["userrole"])
      {
         case 'student':
            header("Location: index.php?content=student_home");
            break;
         case 'root':
            header("Location: index.php?content=root_home");
            break;
         case 'administrator':
            header("Location: index.php?content=administrator_home");
            break;
         default:
            header("Location: index.php?content=home");
            break;
      }
   }
   else
   {
      echo "Uw email en wachtwoord combinatie is niet bekent in de database.<br>";
      echo "U wordt doorgestuurd naar de inlogpagina. Probeer het opnieuw";
      header("Refresh: 4; url=index.php?content=login_form");
   }
?>