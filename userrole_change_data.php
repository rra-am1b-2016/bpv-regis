<?php
   session_start();
   include("connect_db.php");

   $query = "SELECT * 
             FROM `users`";
   //echo $query;
   $result = mysqli_query($conn, $query);

   $record = array();
   if ( $result ) {
      if ( mysqli_num_rows($result) > 0 ) {
         $record = mysqli_fetch_all($result);
         
         array_unshift($record, "succes_records_found");
         
      } else {
         array_unshift($record, "error_nothing_found");
      }
   } else {
         array_unshift($record, "error_database");
   } 
   $jsonStr = json_encode($record);
   //var_dump($jsonStr);
   echo $jsonStr;   
?>