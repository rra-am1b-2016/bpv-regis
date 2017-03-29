<?php

include("connect_db.php");

$query = "SELECT * FROM `users`";

$resource = mysqli_query($conn, $query);

$resultArray = mysqli_fetch_all($resource, MYSQLI_ASSOC);

echo json_encode($resultArray);

?>