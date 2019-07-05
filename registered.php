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
    $comName = $_POST['companyName'];
    $mobile = $_POST['mobile'];
    $category = $_POST['category'];
    $spec = $_POST['spec'];
    $address = $_POST['address'];
    $email = $_POST['email'];
   
     $connection = mysqli_connect("remotemysql.com","1JTq39QISa","wO8zfGSyqY","1JTq39QISa");   
    if(isset($_SESSION['user_err'])){
       echo "failure";
    }

    else{

            if(move_uploaded_file($temp, $file)) {
                $insert = mysqli_query($connection, "INSERT into justsearch_tb ( surname, firstname, middlename, username, password, companyName, mobile, category, specialization, address, email, passport) 
                values ( '$sn', '$fn', '$mn', '$un', '$pwd', '$comName', '$mobile',' $category', '$spec', '$address', '$email', '$file' )");
            }

                $sql = "SELECT * from justsearch_tb WHERE username='$un' and mobile='$mobile' ";
                $result = $connection->query($sql);
                $q = mysqli_fetch_array($result);

            
            if ($result->num_rows > 0) {
                $userName = $q['username'];
                $userId = $q['id'];
                $reg = "Please proceed to login.";
                include('register.php');
            }

            else {
                include('register.php');
            }
                
            mysqli_close($connection);

        }   
} else echo "Please Register first"

?>
