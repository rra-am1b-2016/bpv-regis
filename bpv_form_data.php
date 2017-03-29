<?php
   session_start();
   include("connect_db.php");
   include("sanitize.php");

   $data = json_decode($_GET["jsonstr"], true);
   //var_dump($data);

   //echo $data["houseNumber"];
   $query = "SELECT * 
             FROM `bpv_companies`
             WHERE `urlCompany` = '" . $data["urlCompany"]. "'
             AND   `id` = " . $_SESSION["id"];

   $result = mysqli_query($conn, $query);
   
   $isfound = mysqli_num_rows($result);

   if ( $isfound == 0 )
   {
      $query = "INSERT INTO `bpv_companies` (`id`, 
                                             `nameCompany`, 
                                             `phoneNumberCompany`, 
                                             `nameContact`,
                                             `mobileContact`, 
                                             `streetName`, 
                                             `houseNumber`, 
                                             `postalcode`, 
                                             `city`, 
                                             `urlCompany`, 
                                             `emailContact`, 
                                             `whatToDo`, 
                                             `dateTime`) 
               VALUES                      ('" . $_SESSION["id"] . "', 
                                             '" . sanitize($data["nameCompany"]) . "', 
                                             '" . sanitize($data["phoneNumberCompany"]) . "', 
                                             '" . sanitize($data["nameContact"]) . "', 
                                             '" . sanitize($data["mobileContact"]) . "',
                                             '" . sanitize($data["streetName"]) . "',
                                             '" . sanitize($data["houseNumber"]) . "', 
                                             '" . sanitize($data["postalcode"]) . "', 
                                             '" . sanitize($data["city"]) . "', 
                                             '" . sanitize($data["urlCompany"]) . "', 
                                             '" . sanitize($data["emailContact"]) . "', 
                                             '" . sanitize($data["whatToDo"]) . "', 
                                             '" . sanitize($data["dateTime"]) . "')";
      //echo $query; exit();
      $result = mysqli_query($conn, $query);

      if ($result) {
         echo "succes_insert";
      }
   } else {
      echo "duplicate_entry";
   }

?>