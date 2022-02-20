<?php
//database connection
include 'connection.php';

//Connetion check
if (!$conn) {
    die("Connecon Failed" . mysqli_connect_error());
}
// Insert data
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$website = $_POST["website"];
$age = $_POST["age"];
$sql = "INSERT INTO testtable (name, email, website, comment, age) VALUES ('$name','$email','$website','$comment',$age)";
$conn->query($sql);
$conn->close();
header("Location: index.php");
exit();
