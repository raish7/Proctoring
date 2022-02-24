<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'examdata';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

$username = $_POST['username'];
$usermail = $_POST['usermail'];
$userpass = $_POST['userpass'];

$sql = "INSERT into teacher(username,usermail,userpass) VALUES('$username','$usermail','$userpass')";
 if(mysqli_query($conn,$sql))
 {
     //alert function not working!!
     echo '<script type ="text/JavaScript">';  
     echo 'alert("Data stored.")';
     echo '</script>';
     header("Location: index.html");
 }
 else{
     echo "Something went wrong";
 }
 ?>
 