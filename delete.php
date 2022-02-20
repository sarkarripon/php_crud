<?php
//database connection
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE from `testtable` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
