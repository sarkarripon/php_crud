<?php 
//database connection
include 'connection.php';

 //Connetion check
 if(!$conn) {
     die("Connecon Failed" . mysqli_connect_error());
 }

 echo "I am Joss: line 10";

$id = $_GET['id'];
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];
$age = $_POST["age"];


$sql = "update `testtable` set name='$name',email='$email',website='$website',comment='$comment',age='$age' where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header ('location:index.php');
}



 echo "out of if: line 31";
