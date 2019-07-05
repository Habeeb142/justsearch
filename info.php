<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") {

    
    $file = "uploads/".$_FILES["pix"]["name"];
    $fileType = $_FILES["pix"]["type"];
    $fileSize = $_FILES["pix"]["size"];
    $temp=$_FILES["pix"]["tmp_name"];


    $sn = $_POST['surname'];
    $fn = $_POST['firstname'];
    $mn = $_POST['middlename'];
    $un = $_POST['username'];
    $pwd = $_POST['password'];
    $conpwd = $_POST['conpassword'];
    $comName = $_POST['companyName'];
    $mobile = $_POST['mobile'];
    $category = $_POST['category'];
    $spec = $_POST['spec'];
    $address = $_POST['address'];
    $email = $_POST['email'];
   

        $connection = mysqli_connect("remotemysql.com","1JTq39QISa","wO8zfGSyqY","1JTq39QISa");   

    if(move_uploaded_file($temp, $file)) {
        $insert = mysqli_query($connection, "INSERT into justsearch_tb ( surname, firstname, middlename, username, password, companyName, mobile, category, specialization, address, email, passport) 
        values ( '$sn', '$fn', '$mn', '$un', '$pwd', '$comName', '$mobile',' $category', '$spec', '$address', '$email', '$file' )");
    }

    mysqli_close($connection);

}

?>


