<?php

$dbHost = “localhost”;
$dnUsername = “root”;
$dbPassword = “”;
$dbName = “bisdcsco_parking”;

$conn = mysqli_connect ($dbHost, $dbUsername, $dbPassword, $dbName);

$first = $_POST[‘First_Name’];
$last = $_POST[‘Last_Name’];
$email = $_POST[‘email’];
$uid = $_POST[‘id_num’];

$sql = “INSERT INTO sp_form (first_name, last_name, id_num, email) VALUES (‘$first’, ‘$last’, ‘$email’, ‘$uid’)”;
$result = mysqli_query($conn, $sql);

?>  
