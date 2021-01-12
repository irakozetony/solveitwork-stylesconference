<?php

    $conn = mysqli_connect('localhost', 'root', '', 'styles-conference');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>
