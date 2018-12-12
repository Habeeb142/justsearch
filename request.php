<?php session_start();
$id = $_POST['id'];
$password = $_POST['pwd'];

$connection = mysqli_connect("localhost","root","","justsearch_db");
$pass_word =  mysqli_query($connection, "SELECT * from justsearch_tb where id = '$id' or username = '$id'");
$passCheck = mysqli_fetch_array($pass_word);
$pass = $passCheck['password'];

if ($password == "" && $id == "") {
    $empty_box = "fill in the text boxes correctly";
    include 'index.php';
}

elseif ($password == "") {
    $empty_box = "fill in the password box";
    include 'index.php';
}

elseif ($id == "") {
    $empty_box = "fill in the username/userId box";
    include 'index.php';
}

elseif($pass == $password) {

    $query = mysqli_query($connection, "SELECT * from justsearch_tb where id = '$id' or username = '$id' and password = '$password' ");
    $q = mysqli_fetch_array($query);

    $_SESSION['userId'] = $q['id'];
    $_SESSION['Username'] = $q['username'];
    
    echo "<script>window.open('dashboard.php','_self')</script>";
   
}


else {
    $wrong_password = "Invalid Username or Password";
    include 'index.php';
}





mysqli_close($connection)

?>
