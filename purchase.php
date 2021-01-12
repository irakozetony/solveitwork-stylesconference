<?php
    include_once 'db_connect.php';
    if(isset($_POST['submit'])){
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $passes = mysqli_real_escape_string($conn, $_POST['passes']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    }
    $sql = "INSERT INTO user (fullname, email, passes, comment) VALUES ('$fullname', '$email', '$passes', '$comment')";
    if(mysqli_query($conn, $sql)){
        header('Location: register.php');
    }
    else{
        echo 'query error: ' .mysqli_error($conn);
    }

?>