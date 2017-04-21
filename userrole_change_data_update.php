<?php
   session_start();
   include("connect_db.php");

   $query = "UPDATE `users` SET `userrole` = '" . $_POST["userrole"] . "'
             WHERE `id` = '" . $_POST["id"]. "'";
      
   //echo $query; exit();

   $result = mysqli_query($conn, $query);

   $record = array();
   if ( $result ) {
         array_unshift($record, "gelukt");    
   } else {
         array_unshift($record, "niet gelukt");           
   }

   $jsonStr = json_encode($record);
   //var_dump($jsonStr);
   echo $jsonStr;   
?>