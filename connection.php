<?php 
 $servername = "localhost";
 $username = "test123";
 $password = "test123";
 $dbname = "test";

 //Connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);

 //Connetion check
 if(!$conn) {
     die("Connecon Failed" . mysqli_connect_error());
 }
