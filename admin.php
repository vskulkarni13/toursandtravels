<!doctype html>

<?php require 'dbconfig/db.php'; ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
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
padding-left: 33.5%;
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

    body {
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1.2rem;
    font-weight: 600;
    background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)), url(img/agra.jpg);
    height: 95vh;
    background-size: cover;
    background-position: center;
}
.logo img{
  backface-visibility: hidden;
  float:left;
  height: 120px;
  width: 100px;
}
table {
  width: 60%;
  color: red;
  font-family: monospace;
  font-size: 20px;
  position: absolute;
  top:35%;
  left:20%;
  padding-top: 15%;
}
table,th,td {
  
  color:white;
  border:3px solid black;
}
.title1{
  top:50%;
}
</style>
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
      <li class="nav-item">
        <a class="nav-link disabled" href="trial.php">Registration</a>
      </li>

      <li class="nav-item">
        <a style="margin-left: 380%;color: white;left: 10%;" class="nav-link disabled" href="login.php">Logout</a>
      </li>
    </ul>
    </div>
  <div class="clear"></div>
</nav>
   </div> 
    <div class="title1">
    
        <table class="center">
          <tr>
            <th style="padding-right: 60px;">Name</th>
            <th>Birthdate</th>
            <th>Email</th>
            <th>Contact</th>
            <th style="padding-right: 60px;">Package</th>
            <th>Delete</th>
            <th>Update</th>
            </tr>
        </div>
 

 <?php
$conn = mysqli_connect("localhost", "root", "", "main");
if ($conn->connect_error) {
  die("Connection failed:".$conn->connect_error);

}

$sql    = "SELECT name,birthday,email,phone,Package from USER_INFO";
$result = $conn->query($sql);
?>
<?php
          while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['birthday']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['Package']; ?></td>
              <td><a href="delete.php?name=<?php echo $row['name'];?>" class="btn btn-danger">Delete</a></td>
              <td><a href="update.php?name=<?php echo $row['name'];?>" class="btn btn-primary">Update</a></td>
            </tr>
            .
          <?php endwhile; ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> 
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>
   