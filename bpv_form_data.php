<?php
   session_start();
   include("connect_db.php");

   $data = json_decode($_GET["jsonstr"], true);
   var_dump($data);

   //echo $data["houseNumber"];

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
                                          '" . $data["nameCompany"] . "', 
                                          '" . $data["phoneNumberCompany"] . "', 
                                          '" . $data["nameContact"] . "', 
                                          '" . $data["mobileContact"] . "',
                                          '" . $data["streetName"] . "',
                                          '" . $data["houseNumber"] . "', 
                                          '" . $data["postalcode"] . "', 
                                          '" . $data["city"] . "', 
                                          '" . $data["urlCompany"] . "', 
                                          '" . $data["emailContact"] . "', 
                                          '" . $data["whatToDo"] . "', 
                                          '" . $data["dateTime"] . "')";
   //echo $query; exit();
   $result = mysqli_query($conn, $query);

   if ($result) {
      echo "succes_insert";
   }

?>