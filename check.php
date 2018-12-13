<?php 
    session_start();
    $value = $_POST['userr'];
   
    $connection = mysqli_connect("localhost","root","","justsearch_db");
    $selector = "SELECT username from justsearch_tb where username = '$value'"; 
    $check = $connection->query($selector);

    if($check->num_rows > 0){
        $error = "* Username already exist";
        $_SESSION['user_err']=$error;
    }
?>