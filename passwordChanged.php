<?php session_start();
    $oldP = $_POST['oldPassword'];
    $newP = $_POST['newPassword'];
    $cNewP = $_POST['confirmPassword'];
    $id = $_SESSION['userId'];

    $conn = mysqli_connect("localhost","root","","justsearch_db");

    $info = mysqli_query($conn, "SELECT * from justsearch_tb where id = '$id'");
    $q = mysqli_fetch_array($info);
    $id = $q['id'];
    $Surname = $q['surname'];
    $Firstname= $q['firstname'];
    $Middlename = $q['middlename'];
    $Username = $q['username'];
    $Password = $q['password'];
    $Companyname = $q['companyName'];
    $Mobile = $q['mobile'];
    $Category = $q['category'];
    $Specification = $q['specialization'];
    $Address = $q['address'];
    $Email = $q['email'];
    $Passport = $q['passport'];

    if($newP=="") {
        $fillNew = "fill the input box of the New Password!";
    }
    elseif($cNewP=="") {
        $fillConfirm = "fill the input box of the Confirm Password!";
    }
    elseif($newP!==$cNewP) {
        $ntMatched = "The New Password and the Confirm Password not match!";
    }
    
    elseif($oldP==$Password && $newP!="" && $newP==$cNewP) {
        mysqli_query($conn, "UPDATE justsearch_tb SET password='$newP' WHERE id='$id'");
        $matched ="Password successfully changed!";
    }

    elseif($oldP!=$Password) {
        $ntMatchedOldP = "Wrong password found in the Old Password box";
    }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Dashboard - JustSearch</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css">
       <script type="text/javascript" src="jquery3.3.1.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <script>
        $(document).ready(function(){
            $('#setting').hover(function(){
                $('#color').css("visibility","visible");
            });
            $('#o_p').click(function(){
                $('.from-control').css({"color":"#FF5003"});
                $('.btn').css("background","#FF5003");
                $('h4').css({"border-bottom-color":"#FF5003"});
                $('#go').css({"background":"#FF5003"});
            });
            $('#b_p').click(function(){
                $('.from-control').css({"color":"#28a745"});
                $('.btn').css("background","#28a745");
                $('h4').css({"border-bottom-color":"#28a745"});
                $('#go').css({"background":"#28a745"});
            });
            $('#ash').click(function(){
                $('.from-control').css({"color":"##595353"});
                $('.btn').css("background","#595353");
                $('h4').css({"border-bottom-color":"#595353"});
                $('#go').css({"background":"#595353"});
            });
        });

        function appear(){
            document.querySelector('#go').style.visibility="visible";
        }
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
            width: 30px;
            height: 30px;
            background: #FF5003;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            cursor: pointer;
            margin-bottom: 5px
        }
        #b_p{
            width: 30px;
            height: 30px;
            background: #28a745;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            cursor: pointer;
            margin-bottom: 5px;
        }
        #ash {
        border: 1px solid #595353;
        background-color: #595353;
        width: 30px;
        height: 30px;
        cursor: pointer;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
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
    #color {
        position: fixed;
        left: 0;
        top: 50%;
        background : grey;
        padding: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        z-index: 1;
    }
    .btn:hover {
        background-color: white;
        color: #FF5003;
    
    }
    a:hover {
        text-decoration: none;
    }
    </style>

    <body onscroll="appear()" class="pt-3">
        <div id="setting"><img id="set" src="setting.png" width="30px;"></div>
        <div id="color" style="visibility: hidden">
            <div id="o_p"></div>
            <div id="b_p"></div>
            <div id="ash"></div>
        </div>
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
                            <a href="index.html" class="nav-link" style="font-size: 15pt"><img src="home.png" width="15px" class="mr-2 text-danger">Home</a>
                        </li>
                        <!-- <li class="nav-item mr-3">
                            <a href="#how_it_work" class="nav-link" style="font-size: 15pt"><img src="work.png" width="15px" class="mr-2 text-danger">How it works</a>
                        </li> -->
                        <!-- <li class="nav-item mr-3">
                                <a href="#what_we_do" class="nav-link" style="font-size: 15pt"><img src="do.png" width="15px" class="mr-2 text-danger">What we do</a>
                        </li> -->
                        <li class="nav-item mr-3">
                            <a href="index.html#contact_us" class="nav-link" style="font-size: 15pt"><img src="contact.png" width="15px" class="mr-2 text-danger">Contact Us</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="index.php" class="nav-link" style="font-size: 15pt"><img src="out.png" width="15px" class="mr-2 text-danger">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-3">
            <div class="row mt-2">
                <div class="col-md-3 col-sm-6 mt-5" align="center">
                    <img src=<?php echo $Passport ?> width="200px" height="240px" class="rounded-circle mt-5"><br>
                    <a href="edit_userInfo.php?id= <?php echo $id ?> &username= <?php echo $Username ?>"><button class="btn btn-block">Edit Info</button></a><br>
                    <a href="password_changer.php"><button class="btn btn-block">Change Password</button></a>
                </div>
                <div class="col-md-9">
                    <div class="container bg-white rounded p-3 pt-3" style="margin-top: 70px">

                    <?php if(isset($fillNew)) {?>
                        <div class="alert alert-danger alert-dismissible" align="center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?php echo $Username ?>, please</strong> <?php echo $fillNew ?>
                        </div> 
                   <?php ;} 

                  elseif(isset($fillConfirm)) {?>
                        <div class="alert alert-danger alert-dismissible" align="center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?php echo $Username ?>, please</strong> <?php echo $fillConfirm ?>
                        </div>
                  <?php ;}

                  elseif(isset($ntMatched)) {?>
                        <div class="alert alert-danger alert-dismissible" align="center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Sorry <?php echo $Username ?>,</strong> <?php echo $ntMatched ?>
                        </div>
                  <?php ;}

               elseif(isset($ntMatchedOldP)) {?>
                    <div class="alert alert-danger alert-dismissible" align="center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Sorry <?php echo $Username ?>,</strong> <?php echo $ntMatchedOldP ?>
                    </div>
                <?php ;}

                elseif(isset($matched)) {?>
                    <div class="alert alert-success alert-dismissible" align="center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Congratulation <?php echo $Username ?>,</strong> <?php echo $matched ?>
                    </div>
                <?php ;} ?>


            <form action="">
            <div class="row">
                <div class="col-12 pt-2 form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last Name: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Surname ?>" disabled placeholder="e.g Avatar">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " >Company Name: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Companyname ?>" disabled placeholder="e.g Avatar Group of Company">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " >First Name: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Firstname ?>" disabled placeholder="e.g Avatar">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Address ?>" disabled placeholder="e.g No 13, Olayeni Street, Computer Village, Ikeja, Lagos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " >Middle Name: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Middlename ?>" disabled placeholder="e.g Avatar">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Category: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Category ?>" disabled placeholder="Mechanic">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email: </span>
                                </div>
                                <input type="email" class="form-control" value="<?php echo $Email ?>" disabled placeholder="e.g example@justsearch.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " >Specialization: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Specification ?>" disabled placeholder="e.g Camry">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " >Phone Number: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Mobile ?>" disabled placeholder="e.g 08011223344">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " >Username: </span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $Username ?>" disabled placeholder="e.g saka">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
                </div>
            </div>
        </div>
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
                    <p><a href="index.html#how_it_work" class="text-white"><img src="work.png" class="mr-2" width="20px">How it works</a></p>
                    <p><a href="index.html#what_we_do" class="text-white"><img src="do.png" class="mr-2" width="20px">What we do</a></p>
                    <p><a href="index.html#sign_in" class="text-white"><img src="login.png" class="mr-2" width="20px">Sign in</a></p>
                    <p><a href="index.html#contact_us" class="text-white"><img src="contact.png" class="mr-2" width="20px">Contact us</a></p>
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
    </body>
    </html>
