<?php 
    $con = mysqli_connect('localhost:3306', 'root', '');
    $database = mysqli_select_db($con, 'galize');

    if (!$con || !$database) {
        echo mysqli_error($con);
    }
?>