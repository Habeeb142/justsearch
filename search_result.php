<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Result - JustSearch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
	<script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery3.3.1.js"></script>
</head>

<script>
    function appear(){
        document.querySelector('#go').style.visibility="visible";
    };

   $(document).ready(function() {
        $("#setting").hover(function() {
            $("#color").css("visibility", "visible");
        });

        $("#green").click(function() {
           
            $('.form-control').css({"color": "green"});
            $('h4').css({"border-color": "green"});
            $('#go').css({"background-color": "green"});
            $('#setting').css({"background-color": "green"});
            $('#contact_us').css({"border-color": "green"});
        });

        $("#orange").click(function() {
            
            $('.form-control').css({"color": "#FF5003"});
            $('h4').css({"border-color": "#FF5003"});
            $('#go').css({"background-color": "#FF5003"});
            $('#setting').css({"background-color": "#FF5003"});
            $('#contact_us').css({"border-color": "#FF5003"});
        });

        $("#ash").click(function() {
           
            $('.form-control').css({"color": "#29211C"});
            $('h4').css({"border-color": "#29211C"});
            $('#go').css({"background-color": "#29211C"});
            $('#setting').css({"background-color": "#29211C"});
            $('#contact_us').css({"border-color": "#29211C"});
        })

    })
</script>
<style>
    body{
        background: rgb(242, 242, 242);
    }
    
    #set{
        /* transform: rotate(0deg); */
        animation-name: rot;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    @keyframes rot{
        from{transform: rotate(0deg)}
        to{transform: rotate(360deg)}
    }
    #setting{
        position: fixed;
        left: 0;
        top: 40%;
        background: #FF5003;
        padding: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        z-index: 1;
    }
    #o_p{
        width: 40px;
        height: 40px;
        background: #FF5003;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        cursor: pointer;
    }
    #b_p{
        width: 40px;
        height: 40px;
        background: #28a745;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        cursor: pointer;
    }
   #go{
       position: fixed;
       bottom: 10px;
       right: 10px;
       background: #FF5003;
       border-radius: 100%;
       width: 50px;
       height: 50px;
       padding: 10px;
       z-index: 1;
       transition: 1s;
       visibility: hidden;
   }
   #orange {
       border: 1px solid #FF5003;
       background-color: #eb703c;
       width: 30px;
       height: 30px;
       margin-bottom: 5px;
       cursor: pointer;
       border-top-right-radius: 5px;
       border-bottom-right-radius: 5px;
   }
   #green {
       border: 1px solid green;
       background-color: green;
       width: 30px;
       height: 30px;
       margin-bottom: 5px;
       cursor: pointer;
       border-top-right-radius: 5px;
       border-bottom-right-radius: 5px;
    }
   #ash {
       border: 1px solid #595353;
       background-color: #595353;
       width: 30px;
       height: 30px;
       margin-bottom: 5px;
       cursor: pointer;
       border-top-right-radius: 5px;
       border-bottom-right-radius: 5px;
    }
   #color {
        position: fixed;
        left: 0;
        top: 50%;
        background :whitesmoke;
        padding: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        z-index: 1;
      
   }
</style>

<body onscroll="appear()" class="pt-3">

<div id="setting"><img id="set" src="setting.png" width="30px;"></div>
<div id="color" style="visibility: hidden">
        <div id="orange"></div>
        <div id="green"></div>
        <div id="ash"></div>
    </div>

<?php
    $search = $_POST['search'];
    $cat = $_POST['category'];

    $connection = mysqli_connect("localhost","root","","justsearch_db");
    
    if($search=="") {
        $sql = "SELECT * from justsearch_tb where category like '%$cat%' ";
    }
    elseif($cat=="Select here") {
        $sql = "SELECT * from justsearch_tb where address like '%$search%' ";
    }
    else {
        $sql = "SELECT * from justsearch_tb where address like '%$search%' AND category like '%$cat%' ";
    };

    $result2 = $connection->query($sql);
    $q2 = mysqli_fetch_array($result2);
    $cat = $q2['category'];

    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {

        while ($q = mysqli_fetch_array($result)) {

        $_SESSION['userId'] = $q['id'];
        $_SESSION['Surname'] = $q['surname'];
        $_SESSION['Firstname'] = $q['firstname'];
        $_SESSION['Middlename'] = $q['middlename'];
        $_SESSION['CompanyName'] = $q['companyName'];
        $_SESSION['Mobile'] = $q['mobile'];
        $_SESSION['Category'] = $q['category'];
        $_SESSION['Specification'] = $q['specialization'];
        $_SESSION['Address'] = $q['address'];
        $_SESSION['Passport'] = $q['passport'];

    ?>

    
    <div id="go" onscroll="appear()">
        <a href="#top"><img src="top.png" width="30px"></a>
    </div>
    <nav class="navbar navbar-expand-md bg-light navbar-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">JUST SEARCH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="bar" >
                <ul class="navbar-nav">
                    <li class="nav-item mr-3">
                        <a href="index.php" class="nav-link" style="font-size: 15pt"><img src="home.png" width="15px" class="mr-2 text-danger">Home</a>
                    </li>
                    <!-- <li class="nav-item mr-3">
                        <a href="#how_it_work" class="nav-link" style="font-size: 15pt"><img src="work.png" width="15px" class="mr-2 text-danger">How it works</a>
                    </li> -->
                    <!-- <li class="nav-item mr-3">
                            <a href="#what_we_do" class="nav-link" style="font-size: 15pt"><img src="do.png" width="15px" class="mr-2 text-danger">What we do</a>
                    </li> -->
                    <!-- <li class="nav-item mr-3">
                        <a href="index.php#contact_us" class="nav-link" style="font-size: 15pt"><img src="contact.png" width="15px" class="mr-2 text-danger">Contact Us</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="index.php" class="nav-link" style="font-size: 15pt"><img src="out.png" width="15px" class="mr-2 text-danger">Sign Out</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row mt-2">
            <div class="col-md-12 col-sm-12 mt-5" align="center">
                <img src="<?php echo $_SESSION['Passport'] ?> " width="100px" height="240px" height="110px" class="rounded-circle mb-4">
                <div class="row">
                    <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pr-5">Full Name: </span>
                        </div>
                        <div type="text" class="form-control" style="color: #FF5003"><b><?php echo $_SESSION['Surname']." ". $_SESSION['Firstname']." ". $_SESSION['Middlename'] ?></b></div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="padding-right: 60px">Address: </span>
                        </div>
                        <div type="text" class="form-control" style="color: #FF5003"><b><?php echo $_SESSION['Address'] ?></b></div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Phone Number: </span>
                        </div>
                        <div type="text" class="form-control" style="color: #FF5003"><b><?php echo $_SESSION['Mobile'] ?></b></div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Company Name: </span>
                        </div>
                        <div type="text" class="form-control" style="color: #FF5003"><b><?php echo $_SESSION['CompanyName'] ?></b></div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="padding-right: 60px">Category: </span>
                        </div>
                        <div type="text" class="form-control" style="color: #FF5003"><b><?php echo $_SESSION['Category'] ?></b></div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pr-4">Specialization: </span>
                        </div>
                        <div type="text" class="form-control" style="color: #FF5003"><b><?php echo $_SESSION['Specification'] ?></b></div>
                    </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
<?php } ?>

<div class="container-fluid mt-5">
        <div class="row pt-3" style="background: #2A3646">
            <div class="col-md-3 offset-1 col-sm-6 text-white">
                <h4 style="border-bottom: 1px solid #FF5003; padding-bottom: 5px">About Us</h4>
                <p>Just Search is a group of young developers providing solution to various humanity problems</p>
            </div>
            <div class="col-md-3 offset-1 col-sm-6 text-white">
                <h4 style="border-bottom: 1px solid #FF5003; padding-bottom: 5px">Contact Us</h4>
                <p><img src="phone.png" class="mr-2" width="20px">08000000000</p>
                <p><img src="facebook.png" class="mr-2" width="20px">Just Search</p>
                <p><img src="instagram.png" class="mr-2" width="20px">@justSearch_official</p>
                <p><img src="twitter.png" class="mr-2" width="20px">#Just_Search</p>
            </div>
            <div class="col-md-3 offset-1 col-sm-6 text-white">
                <h4 style="border-bottom: 1px solid #FF5003; padding-bottom: 5px">Quick Links</h4>
                <p><a href="index.php#how_it_work" class="text-white"><img src="work.png" class="mr-2" width="20px">How it works</a></p>
                <p><a href="index.php#what_we_do" class="text-white"><img src="do.png" class="mr-2" width="20px">What we do</a></p>
                <p><a href="index.php#sign_in" class="text-white"><img src="login.png" class="mr-2" width="20px">Sign in</a></p>
                <p><a href="index.php#contact_us" class="text-white"><img src="contact.png" class="mr-2" width="20px">Contact us</a></p>
            </div>
        </div>
        <div class="row pt-2" style="background: black">
            <div class="col-6">
                <p class="text-white">All rights reserved. JUST SEARCH</p>
            </div>
            <div class="col-6">
                <p align="right" class="text-white pr-5">&#169; Copyright 2018</p>
            </div>
        </div>
    </div>            

<?php }
else {
    if($cat == "") {
        $notFound = "Desired category not found in the location!";
        include 'index.php';
    }
    else {
        $notFound = "Desired location not found!";
        include 'index.php';
    }
} ?>
</body>
</html>