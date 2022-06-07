<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo Time(); ?>">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style type="text/css">
 #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: black; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
    small {
     font-size: calc(12px + (15 - 12) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .bold-text {
     color: #ffc107 !important;
 }

 .mt-55 {
     margin-top: calc(50px + (60 - 50) * ((100vw - 360px) / (1600 - 360))) !important
 }

 h3 {
     font-size: calc(34px + (40 - 34) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .social {
     font-size: 21px !important
 }

 .rights {
     font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
 }
 .textup1{
  animation-name: example;
  animation-duration: 3s;
 }
 @keyframes example{
  0%   {margin: -300px;padding: 20px;}
  100% {margin:0px;padding: 20px; }
 }
 /* Dropdown Button */
.dropbtn {
  background-color: #e8f0e800;
  color: #03ffb4;
  padding: 10px;
  font-size: 25px;
  border: none;
  font-family: poppins;
  font-weight: bold;
  text-transform: unset;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f194;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 20px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color:#e8f0e800;}

 </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#">Virtual Crime Alert</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
  <span class="navbar-toggler-icon"><i class="fa fa-bars" style="font-size:30px"></i></span>
</button>
  <div class="collapse navbar-collapse" id="navbarContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="helpline.php">Helpline</a>
    </li>
    <li class="nav-item"><div class="dropdown">
  <button class="dropbtn">Welcome <?php echo $_SESSION['username'];?></button>
  <div class="dropdown-content">
    <a href="logout.php">Logout</a>
  </div>
</div>
    </li>
  </ul>
</div>
</div>
</nav>

  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/keylogger.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="textup1">Keylogger</h5>
    <p class="textup1">Keyloggers are a type of monitoring software designed to record keystrokes made by a user. One of the oldest forms of cyber threat, these keystroke loggers record the information you type into a website or application and send to back to a third party.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img17.jpg" alt="Second slide">
  <div class="carousel-caption d-none d-md-block">
    <h5 class="textup1">Website Hacking</h5>
    <p class="textup1">A computer hacker is a computer expert who uses their technical knowledge to achieve a goal or overcome an obstacle, within a computerised system by non-standard means.</p>
  </div>
</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/global.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="textup1">Computer Virus</h5>
    <p class="textup1">Computer viruses are software designed to rapidly spread among devices within a network. Depending on its purpose, ransomware can infect, edit, or delete files. Hackers also use computer viruses to send spam messages.</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up' style='font-size:24px'></i></button>
<div class="container-fluid" style="background: url(images/cyberbg.jpg);background-repeat: no-repeat;width: 100%;height: 600px;">
  <iframe class="embed-responsive-item col-md-8" src="https://www.youtube.com/embed/ojn-HuJrIQc" allowfullscreen style="border: none;padding: 20px;position: absolute;max-height: 100%;height: 85%;width: 65%;max-width: 100%;"></iframe>
  <div class="box col-md-4" style="width:450px; height:600px;border: 0px solid; text-align: justify;padding: 20px;box-shadow: 0px 10px 10px 10px;background-color: white;float: right;">
    <div class="inner-div" style="padding: 10px;background-color: #000a15;position: relative;color: white;text-align: center;border-left: 10px solid #ffc107;">Latest Updates</div><marquee direction="Up"><img src="images/gif4.gif" width="50px" height="50px"><a href="https://www.indiatvnews.com/technology/news-top-5-cyber-attack-trends-likely-to-continue-in-2021-679814" style="color: #ff1000;"><strong>Remote work-related threats </strong><br>
      <img src="images/gif4.gif" width="50px" height="50px"><a href="https://cyware.com/news/teamtnt-back-at-it-again-kubernetes-edition-fabbf37d" style="color: #ff1000;><strong>TeamTNT Back at it Again - Kubernetes Edition</strong></a><br><img src="images/gif4.gif" width="50px" height="50px"><a href="https://www.bleepingcomputer.com/news/security/microsoft-warns-of-increasing-oauth-office-365-phishing-attacks/?&web_view=true" style="color: #ff1000;"><strong>Microsoft warns of increasing OAuth Office 365 phishing attacks</strong><br>Microsoft has warned of an increasing number ...</a><br><br><br><br>

    </marquee><div style="width: 100%;height: 35%; background-size: cover;margin: 0px;" ><img src="images/img20.jpg" width="100%" height="95%"></div></div></div>

 <div class="container-fluid pb-0 mb-0 justify-content-center text-light " style="overflow: hidden;
     margin-top: 0px; background: #262626; color: #627482 !important; margin-bottom: 0;padding-bottom: 0">
     <footer  style="font-family: 'Rubik', sans-serif;">
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">Virtual Crime Alert</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>Menu</b></h6>
                         <ul class="list-unstyled" style="color: #627482;">
                             <li><a href="index.php" style="color: #6c757d;">Home</a></li>
                             <li><a href="about.php" style="color: #6c757d;">About</a></li>
                             <li><a href="contect.php" style="color: #6c757d;">Contact</li>
                             <li><a href="services.php" style="color: #6c757d;">Services</a></li>
                             <li><a href="helpline.php" style="color: #6c757d;">Helpline</a></li>
                             <li><a href="login.php" style="color: #6c757d;">Login</a></li>
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Useful Links</b></h6>
                         <p class="mb-1"><a href="#" style="color: #6c757d;">Support</a></p>
                         <p><a href="#" style="color: #6c757d;">Terms&Conditions</a></p>
                         <p><a href="#" style="color: #6c757d;">Privacy Policy</a></p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                         <p class="social text-muted mb-0 pb-0 bold-text"> Connect with us<span class="mx-2"><i class="fab fa-facebook-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fab fa-google-plus-square" aria-hidden="true"></i></span> </p><small class="rights"><span><i class="far fa-copyright"></i></span>&nbsp;<span><i class="far fa-registered"></i></span>copyright 2021 VirtualCrimeAlert All Rights Reserved.</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mt-55 mt-2 text-muted bold-text"><b>Vinod Chouhan</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> vinodchouhan@gmail.com</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text"><b>Ayush sharma</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> ayushsharma@gmail.com</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text"><b>Nitesh Gupta</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> niteshgupta@gmail.com<br><p style="color:#007bff;">cyber@virtualcrimealert.com</p></small>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
 </div>
 
 <script type="text/javascript">//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
