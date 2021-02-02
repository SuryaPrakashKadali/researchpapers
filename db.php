<?php
    $con = mysqli_connect("localhost","root","","research_data");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }	
?>