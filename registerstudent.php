<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'examdata';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

$username = $_POST['username'];
$usermail = $_POST['usermail'];
$userpass = $_POST['userpass'];

$sql = "INSERT into student(username,usermail,userpass) VALUES('$username','$usermail','$userpass')";
 if(mysqli_query($conn,$sql))
 {
    header("Location: index.html");
 }
 else{
     echo "Something went wrong";
 }
 ?>

