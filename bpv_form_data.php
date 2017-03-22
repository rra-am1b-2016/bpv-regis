<?php
   include("connect_db.php");

   $data = json_decode($_GET["jsonstr"], true);

   echo $data["houseNumber"];

?>