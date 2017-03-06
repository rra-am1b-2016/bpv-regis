<?php
   include("connect_db.php");

   if (isset($_GET["id"])) {
      $query = "SELECT * FROM `users` WHERE id = " . $_GET["id"];

      $resource = mysqli_query($conn, $query);

      $record = mysqli_num_rows($resource);

      echo "Dit is het aantal gevonden records: " . $record;
   } else {
      echo "Er is geen id meegegeven";
   }
   ?>