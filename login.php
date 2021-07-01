<?php

  $host="localhost";
  $user="root";
  $password="";
  $db="main";

  $con=mysqli_connect($host,$user,$password);
  mysqli_select_db($con,$db);

  if (isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where User='".$uname."'AND Password='".$password."'limit 1";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
      echo '<script type="text/javascript">alert("You have successfully logged in")</script>';
      header("Location: admin.php");
      exit();

    }
    else{
      echo '<script type="text/javascript">alert("You Have Inserted Incorrect Information.Please Try Again!")</script>';
    }
  }



?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Tours and Travels</title>
    <script type="text/javascript" src="dmxAppConnect/dmxAppConnect.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  />
    <script type="text/javascript" src="dmxAppConnect/dmxSwiper/dmxSwiper.js"></script>
    <script type="text/javascript" src="dmxAppConnect/dmxSwiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dmxAppConnect/dmxSwiper/themes/white.css" />
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- FOR validation -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        h1 {
            font-size: 3.5rem;
            text-transform: uppercase;
            font-weight: 600;
            text-shadow: 0 0.3rem 0.9rem rgba(0,0,0,.5);
        }
        p.lead {
            text-shadow: 0 0.2rem 0.5rem rgba(0,0,0,.6);
            font-size: 1.5rem;
        }
        .swiper-pagination-bullet {
            width: 16px;
            height: 16px;
            margin: 12px 0 !important;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
        }
    .navbar-light .navbar-brand {
    color: rgb(255 255 255);
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
   color: rgb(255 255 255 / 90%);
   padding: 1px 15px;
}
.bg-light {
    background-color: #06060600!important;
}
.navbar-light .navbar-nav .nav-link {
       color: rgb(255 255 255 / 90%);
       padding: 1px 15px;
}
.navbar-light .navbar-nav .nav-link.disabled {
        color: rgb(255 255 255 / 90%);
        padding: 1px 15px;
}
.navbar-nav {
padding-left: 20%;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
        color: rgb(255 0 0 / 100%);
        background-image: -webkit-gradient( linear, left top, right top,color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
        transition: 0.6s ease;
}
.footer_class
{
height:80px;
border:1px solid red;
position:fixed; 
z-index:99;
}

body {
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1.2rem;
    font-weight: 600;
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(img/agra.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.invalid-feedback{
  color:red;
}
.navbar-nav {
    padding-left: 34%;
}
.logo img{
  backface-visibility: hidden;
  float:left;
  height: 120px;
  width: 100px;
}
.nav-link{
  font-weight: bold;
  font-size: 19px;
}
</style>
    </head>

    <body id="index" is="dmx-app">

 <div style="position:fixed;width:100%;height: 50px;z-index: 99;">
    <!--<h5  class="text-white">Home</h5> -->
    
  
   
   <div class="logo">
  <img src="img/mtvlogo1.png">
</div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.html">About Us<span class="sr-only">(current)</span></a>
      </li>
    <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link disabled" href="trial.php">Registration</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
   </div> 
   <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login Info</h2>
                    <form action="#" class="was-validated" method="post">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username" required="required">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required="required">
                        </div>
                        <div class="button">
                            <button class="btn btn--pill btn--green" type="submit" name="submit" value="LOGIN">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> 
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>