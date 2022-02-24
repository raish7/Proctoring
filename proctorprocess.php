<?php
require_once('connection.php');
session_start();
    if(isset($_POST['usersubmit']))
    {
       {
            $query="select * from teacher where username='".$_POST['username']."' and usermail='".$_POST['usermail']."' and  userpass='".$_POST['userpass']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['username'];
                $_SESSION['status']="Active";
                header("location: proctordash.php");
            }
            else
            {
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location:index.html");

              
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
?>