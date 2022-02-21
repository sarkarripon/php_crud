<?php
//database connection
include_once 'connection.php';

//Connetion check
if (!$conn) {
    die("Connecon Failed" . mysqli_connect_error());
}
// Insert data to variables
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$website = $_POST["website"];
$age = $_POST["age"];


$nameErr = $emailErr = $ageErr = $websiteErr = $ageErr = $commentErr = "";


// checking if empty
if (empty($name)) {
    $nameErr = "Name is required";
} else {
    $nameWithNumber = dataSanitize($name);
    //removing number from name 
    $name = preg_replace('/\d+/', '', $nameWithNumber);
}

if (empty($email)) {
    $emailErr = "Email is required";
} else {
    $email = dataSanitize($email);
}

if (empty($website)) {
    $websiteErr = "Input a valid site";
} else {
    $website = dataSanitize($website);
}

if (empty($age)) {
    $ageErr = "Age is required";
} else {
    $age = dataSanitize($age);
}

if (empty($comment)) {
    $commentErr = "We need Comment";
} else {
    $comment = dataSanitize($comment);
}


//data sanitize

$name = dataSanitize($name);
$email = dataSanitize($email);
$website = dataSanitize($website);
$age = dataSanitize($age);
$comment = dataSanitize($comment);


function dataSanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "INSERT INTO testtable (name, email, website, comment, age) VALUES ('$name','$email','$website','$comment',$age)";
$conn->query($sql);
$conn->close();

header("Location: index.php");

exit();
