<!DOCTYPE html>
<html>
<head>
    <title>Register - JustSearch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="jquery3.3.1.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<script>

</script>
<script>
    function appear(){
        document.querySelector('#go').style.visibility="visible";
    }
</script>
<style>
    body{
        background: rgb(242, 242, 242);
    }
    #panel{
        position: fixed;
        left: 0;
        top: 50%;
        transition: 0.5s;
        display: none;
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
    }
    #b_p{
        width: 40px;
        height: 40px;
        background: green;
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
       transition: 0.3s;
       visibility: hidden;
   }
</style>
<body onscroll="appear()">
    <div id="setting"><img id="set" src="setting.png" width="30px;"></div>
    <div id="panel">
        <div id="o_p"></div>
        <div id="b_p"></div>
    </div>
    
    <!-- <div id="go">
        <a href="#top"><img src="top.png" width="30px"></a>
    </div> -->
    
    <nav class="navbar navbar-expand-md bg-light navbar-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">JUST SEARCH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="bar" >
                <ul class="navbar-nav">
                    <li class="nav-item mr-3">
                        <h3><a href="#" class="nav-link" style="font-size: 15pt"><img src="register.png" width="30px" class="mr-2 text-danger">REGISTRATION PAGE</a></h3>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container bg-white" style="margin-top: 100px">
        <form action="registered.php" method="POST" enctype="multipart/form-data">
           <?php if(isset($reg)) {?>
               <div class="alert alert-warning alert-dismissible" align="center">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <strong>Congratulations!, </strong>Username: <?php echo $userName ?>, UserId: <?php echo $userId ?>. <?php echo $reg ?>
               </div>
         <?php  } ?>
        <div class="row">
            <div class="col-12 pt-2 form-group">
                <h4 align="center" class="text-dark">Register here</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Last Name: </span>
                            </div>
                            <input type="text" class="form-control" name="surname" placeholder="e.g Avatar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text " >Company Name: </span>
                            </div>
                            <input type="text" class="form-control" name="companyName" placeholder="e.g Avatar Group of Company">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text " >First Name: </span>
                            </div>
                            <input type="text" class="form-control" name="firstname" placeholder="e.g Avatar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Address: </span>
                            </div>
                            <input type="text" class="form-control" name="address" placeholder="e.g No 13, Olayeni Street, Computer Village, Ikeja, Lagos">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Middle Name: </span>
                            </div>
                            <input type="text" class="form-control" name="middlename" placeholder="e.g Avatar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Category: </span>
                            </div>
                            <select class="form-control" name="category">
                                <option value="Mechanic">Mechanic</option>
                                <option value="Vulcanizer">Vulcanizer</option>
                                <option value="Panel Beater">Panel Beater</option>
                                <option value="Rewire">Rewire</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email: </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="e.g example@justsearch.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Specialization: </span>
                            </div>
                            <input type="text" class="form-control" name="spec" placeholder="e.g Camry">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Phone Number: </span>
                            </div>
                            <input type="text" class="form-control" name="mobile" placeholder="e.g 08011223344">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Username: </span>
                            </div>
                            <input type="text" class="form-control" id="user" name="username" placeholder="e.g saka">
                        </div>
                        <?php if(isset($error)){?>
                        <p id="error" class="text-danger"><?php echo $error ?></p>
                        <?php }?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Passport: </span>
                            </div>
                            <input type="file" class="form-control" name="pix">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text " >Password: </span>
                            </div>
                            <input type="text" name="password" class="form-control" placeholder="**********">
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">REGISTER</button>
                <a href="index.php#sign" class="ml-4">Sign In</a>
            </div>
        </div>
        </form>
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

    <script>
        $(document).ready(function(){
            $('#user').keyup(function(){
                // alert("Issues here?")
                $.post('check.php',{ userr: $('#user').val() }, function(data){
                    $('#error').html("* Username already exist");
                });
            });
        })
    </script>
</body>
</html>
