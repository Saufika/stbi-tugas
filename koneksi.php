<?php
$servername = "localhost";
$username = "id7538959_user123";
$password = "root123";
$dbname = "id7538959_tugas";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>
