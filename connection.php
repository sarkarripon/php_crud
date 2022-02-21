<?php
$servername = "localhost";
$username = "test123";
$age = "test123";
$dbname = "test";

//Connection
$conn = mysqli_connect($servername, $username, $age, $dbname);

//Connetion check
if (!$conn) {
    die("Connecon Failed" . mysqli_connect_error());
}
