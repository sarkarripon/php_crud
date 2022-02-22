<?php
$servername = "localhost";
$username = "root";
$password = "#c2tBQ3j!Qs5M$N6";
$dbname = "testdatabase";

//Connection
$conn = mysqli_connect($servername, $username, $age, $dbname);

//Connetion check
if (!$conn) {
    die("Connecon Failed" . mysqli_connect_error());
}
