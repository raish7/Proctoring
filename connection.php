<?php

    $con=mysqli_connect('localhost','root','','examdata');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }


?>