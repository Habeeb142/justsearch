<!DOCTYPE html>
<html>
<head>
    <title>Home - JustSearch</title>
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
       /* visibility: hidden; */
   }
   #orange {
       border: 1px solid #FF5003;
       background-color: #eb703c;
       width: 30px;
       height: 30px;
       margin-bottom: 5px
   }
   #green {
       border: 1px solid green;
       background-color: green;
       width: 30px;
       height: 30px;
       margin-bottom: 5px
    }
   #ash {
       border: 1px solid #595353;
       background-color: #595353;
       width: 30px;
       height: 30px;
       margin-bottom: 5px
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
<script>
    $(document).ready(function() {
        $("#setting").hover(function() {
            $("#color").css("visibility", "visible");
        });

        $("#green").click(function() {
            $('button').css("background-color", "green");
            $('.input-group-text').css("background-color", "green");
            $('h3').css({"color": "green", "border-color": "green"});
            $('h4').css({"border-color": "green"});
            $('#go').css({"background-color": "green"});
            $('#setting').css({"background-color": "green"});
            $('#contact_us').css({"border-color": "green"});
        });

        $("#orange").click(function() {
            $('button').css("background-color", "#FF5003");
            $('.input-group-text').css("background-color", "#FF5003");
            $('h3').css({"color": "#FF5003", "border-color": "#FF5003"});
            $('h4').css({"border-color": "#FF5003"});
            $('#go').css({"background-color": "#FF5003"});
            $('#setting').css({"background-color": "#FF5003"});
            $('#contact_us').css({"border-color": "#FF5003"});
        });

        $("#ash").click(function() {
            $('button').css("background-color", "#595353");
            $('.input-group-text').css("background-color", "#29211C");
            $('h3').css({"color": "#29211C", "border-color": "#29211C"});
            $('h4').css({"border-color": "#29211C"});
            $('#go').css({"background-color": "#29211C"});
            $('#setting').css({"background-color": "#29211C"});
            $('#contact_us').css({"border-color": "#29211C"});
        })

    })
</script>
<body>
    <div id="setting">
        <img id="set" src="setting.png" width="30px;">
    </div>

    <div id="color" style="visibility: hidden">
        <div id="orange"></div>
        <div id="green"></div>
        <div id="ash"></div>
    </div>
    


    <div id="panel">
        <div id="o_p"></div>
        <div id="b_p"></div>
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
                        <a href="#" class="nav-link" style="font-size: 15pt"><img src="home.png" width="15px" class="mr-2 text-danger">Home</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="#how_it_work" class="nav-link" style="font-size: 15pt"><img src="work.png" width="15px" class="mr-2 text-danger">How it works</a>
                    </li>
                    <li class="nav-item mr-3">
                            <a href="#what_we_do" class="nav-link" style="font-size: 15pt"><img src="do.png" width="15px" class="mr-2 text-danger">What we do</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="#sign" class="nav-link" style="font-size: 15pt"><img src="login.png" width="15px" class="mr-2 text-danger">Sign in</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="#contact_us" class="nav-link" style="font-size: 15pt"><img src="contact.png" width="15px" class="mr-2 text-danger">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="head-img" style="margin-top: 65px" id="top">
        <div class="container-fluid">
            <h1 class="text-white" id="header-text">JUST SEARCH</h1><i class="text-white" style="font-size: 15pt">...for the service ANYWHERE you are</i>
            <div class="col-md-6 offset-md-3">
            <form class="mt-5" action="search_result.php" method="POST">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-white" style="background: #FF5003">Location : </span>
                        </div>
                        <input type="text" class="form-control" placeholder="e.g Yaba, Lagos" name="search">
                     </div>
                     <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white" style="background: #FF5003">Category:</span>
                            </div>
                            <select class="form-control" name="category">
                                <option selected>Select here</option>
                                <option value="Mechanic">Mechanic</option>
                                <option value="Vulcanizer">Vulcanizer</option>
                                <option value="Rewire">Rewire</option>
                                <option value="Panel Beater">Panel Beater</option>
                            </select>
                        </div>
                    <button class="btn" type="submit"><img src="search.png" width="20px"> SEARCH</button>
                </div>
            </form> 
        </div>          
        </div>
    </div>

    <?php if(isset($wrong_password)){?>
        <div class="alert alert-danger alert-dismissible" align="center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Oops!</strong> <?php echo $wrong_password ?>
        </div>  
    <?php }
    
    if(isset($empty_box)){?>
        <div class="alert alert-danger alert-dismissible" align="center" >
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Please</strong> <?php echo $empty_box ?>
        </div>  
    <?php }

    if(isset($notFound)){?>
        <div class="alert alert-danger alert-dismissible" align="center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Oops!</strong> <?php echo $notFound ?>
        </div> 
    <?php } ?>
   

    <div class="container mt-5">
            <h3 style="color: #FF5003; border-bottom: 1px solid #FF5003; width: 55%; margin: 0 auto; padding-bottom: 10px"  align="center">How it Works</h3 >
        <div class="row mt-3" id="how_it_work">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center; padding-bottom: 10px">
                        <img class="rounded-circle" src="images/s1.jpg" width="150px">
                        <h4 align="center">Step 1</h4>
                        <p class="mt-3 c-text">Open the page on your device and search for the service using your location, then select from the list of available repairers in your location</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center; padding-bottom: 10px">
                            <img class="rounded-circle" src="images/s3.jpg" width="150px">
                            <h4 align="center">Step 2</h4>
                            <p class="mt-3 c-text">Contact any of the service provider through the mobile number displayed on the list generated for your specified location and specified service</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body" style="text-align: center; padding-bottom: 34px">
                                <img class="rounded-circle" src="images/s4.jpg" width="200px">
                                <h4 align="center">Step 3</h4>
                                <p class="mt-3 c-text">Get the car repaired by the mechanic, vulcanizer, rewire or panel beater that you've contacted</p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row bg-white mt-3 p-3 rounded">
            <div class="col-md-3">
                <img src="images/img1.jpg" class="rounded" id="mr" width="255px">
            </div>
            <div class="col-md-3">
                <img src="images/img2.jpg" class="rounded" id="mr" width="255px">
            </div>
            <div class="col-md-3">
                <img src="images/img4.jpg" class="rounded" id="mr" width="255px">
            </div>
            <div class="col-md-3">
                <img src="images/img5.jpg" class="rounded" id="mr" width="255px">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 " id="contact_us" style="border-right: 1px solid #FF5003">
                    <h3 class="mt-2" style="color: #FF5003; border-bottom: 1px solid #FF5003; width: 50%; margin: 0 auto; padding-bottom: 10px" align="center">Contact Us</h3 >
                        <form class="mt-5">
                                <div class="form-group">
                                    
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white" style="background: #FF5003"><img src="phone.png" class="mr-2" width="20px">Phone Number: </span>
                                        </div>
                                        <div type="text" class="form-control">08000000000</div>
                                     </div>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text text-white" style="background: #FF5003; padding-right: 50px"><img src="instagram.png" class="mr-2" width="20px">Instagram:</span>
                                       </div>
                                       <div type="text" class="form-control">@JustSearch_Official</div>
                                    </div>
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white" style="background: #FF5003; padding-right: 50px"><img src="facebook.png" class="mr-2" width="20px">Facebook: </span>
                                        </div>
                                        <div type="text" class="form-control">Just Search</div>
                                     </div>
                                     <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white" style="background: #FF5003; padding-right: 70px"><img src="twitter.png" class="mr-2" width="20px">Twitter: </span>
                                            </div>
                                            <div type="text" class="form-control">@justSearch</div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white" style="background: #FF5003; padding-right: 80px"><img src="email.png" class="mr-2" width="20px">Email:</span>
                                        </div>
                                        <div type="text" class="form-control"><a href="justsearch@gmail.com">justsearch@gmail.com</a></div>
                                     </div>
                                </div>
                            </form> 
            </div>
            <div class="col-md-6" id="sign">
                    <h3 class="mt-2" style="color: #FF5003; border-bottom: 1px solid #FF5003;; width: 35%; margin: 0 auto; padding-bottom: 10px" align="center">Sign In</h3 >
                        
                    <?php if(isset($wrong_password)){?>
                        <div class="alert alert-danger alert-dismissible" align="center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Oops!</strong> <?php echo $wrong_password ?>
                        </div>  
                    <?php }?>
    
                    <?php if(isset($empty_box)){?>
                        <div class="alert alert-danger alert-dismissible" align="center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Please</strong> <?php echo $empty_box ?>
                        </div>  
                    <?php }?>
                        
                        <form class="mt-5" action="request.php" method="POST">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-white" style="background: #FF5003"><img src="phone.png" class="mr-2" width="20px">Username: </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username or UserId" name="id">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-white" style="background: #FF5003"><img src="password.png" class="mr-2" width="20px">Password: </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="*********" name="pwd">
                                </div>
                                <button class="btn" style="background-color: #FF5003" type="submit">Sign in</button>
                            </div>
                        </form> 
            </div>
        </div>
       
        
    </div>
    <div class="container-fluid mt-5 ">
            <div class="row bg-white" id="what_we_do">
            
                    <div class="col-md-4 pb-3">
                        <h3 class="mt-2 text-dark" style="color: #FF5003; border-bottom: 4px solid #FF5003; margin: 0 auto">What we do</h3 >
                        <p style="margin: 0 auto; word-spacing: 5px">We allow you search for a mechanic, vulcanizer, rewire or a panel beater around your present location. With us, you can easily contact a repairer in an area you are not familiar with. We ensure optimum security as we display to you, the face of the repairer you would be expecting. Alas, the repairers are all registered.</p>
                    </div>
                    <div class="col-md-4 pb-3">
                        <h3 class="mt-2 text-dark" style="color: #FF5003; border-bottom: 4px solid #FF5003; margin: 0 auto">Why we are Unique</h3 >
                        <p style="margin: 0 auto; word-spacing: 5px">We allow you search for a mechanic, vulcanizer, rewire or a panel beater around your present location. With us, you can easily contact a repairer in an area you are not familiar with. We ensure optimum security as we display to you, the face of the repairer you would be expecting. Alas, the repairers are all registered.</p>
                    </div>
                    <div class="col-md-4 pb-3">
                        <h3 class="mt-2 text-dark" style="color: #FF5003; border-bottom: 4px solid #FF5003; margin: 0 auto">Why Just Search</h3 >
                        <p style="margin: 0 auto; word-spacing: 5px">We allow you search for a mechanic, vulcanizer, rewire or a panel beater around your present location. With us, you can easily contact a repairer in an area you are not familiar with. We ensure optimum security as we display to you, the face of the repairer you would be expecting. Alas, the repairers are all registered.</p>
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
                <p><a href="#how_it_work" class="text-white"><img src="work.png" class="mr-2" width="20px">How it works</a></p>
                <p><a href="#what_we_do" class="text-white"><img src="do.png" class="mr-2" width="20px">What we do</a></p>
                <p><a href="#sign_in" class="text-white"><img src="login.png" class="mr-2" width="20px">Sign in</a></p>
                <p><a href="#contact_us" class="text-white"><img src="contact.png" class="mr-2" width="20px">Contact us</a></p>
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
