<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php session_start();
 $search = $_POST['search'];
 $cat = $_POST['category'];

     $connection = mysqli_connect("remotemysql.com","1JTq39QISa","wO8zfGSyqY","1JTq39QISa");   
 
 if($search=="") {
    $sql = "SELECT * from justsearch_tb where category like '%$cat%' ";
 }
 elseif($cat=="Select here") {
    $sql = "SELECT * from justsearch_tb where address like '%$search%' ";
 }
 else {
    $sql = "SELECT * from justsearch_tb where address like '%$search%' AND category like '%$cat%' ";
 };

 $result = $connection->query($sql);

 if ($result->num_rows > 0) {

    while ($q = mysqli_fetch_array($result)) {

     $_SESSION['userId'] = $q['id'];
     echo "yesss";
     $_SESSION['Surname'] = $q['surname'];
     $_SESSION['Firstname'] = $q['firstname'];
     $_SESSION['Middlename'] = $q['middlename'];
     $_SESSION['CompanyName'] = $q['companyName'];
     $_SESSION['Mobile'] = $q['mobile'];
     $_SESSION['Category'] = $q['category'];
     $_SESSION['Specification'] = $q['specialization'];
     $_SESSION['Address'] = $q['address'];

     echo "";
};


     
}
else { echo "0 result found";};


$connection->close();
?>


</body>
</html>

