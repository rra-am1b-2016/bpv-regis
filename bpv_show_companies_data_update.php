<?php
   session_start();
   include("connect_db.php");

   $query = "UPDATE `bpv_companies` SET `status` = '" . $_POST["indexStatus"] . "'
             WHERE `id` = '" . $_SESSION["id"]. "'
             AND   `urlCompany` = '" . $_POST["urlCompany"] . "'" ;
   //echo $query;

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