<?php
   // Maak contact met de mysql server
   include("./connect_db.php");

   // Maak een select query op basis van gegeven e-mailadres en wachtwoord. 
   $sql = "SELECT * 
           FROM `users` 
           WHERE `id` = '".$_POST["id"]."'";
   //echo $sql; exit();
   // Vuur de query af op de database
   $result = mysqli_query($conn, $sql);
   
   // Als het record gevonden is...
   if ( mysqli_num_rows($result) > 0 )  {

      $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ( !strcmp($record["password"], "")) {
        echo "error_no_mail_send";
      } else {
        if ( $record["activate"]) {

                if ( !strcmp($record["password"], sha1($_POST["pw"]))) {

                //var_dump($record);
                session_start();
                $_SESSION["id"] = $record["id"];
                $_SESSION["userrole"] = $record["userrole"];
                echo $_SESSION["userrole"];
                } else {
                echo "error_activate";
                }
        } else {
                echo "error_pw";
        }
      }
   } else {
      echo "error_id";
   }
?>