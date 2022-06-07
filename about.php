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
  .bg-dark {
    background-color: #1d2124!important;
}
.card{border: none;}
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
  animation-duration: 2s;
 }
 @keyframes example{
  0%   {transform: rotateX(180deg);}
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

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Virtual Crime Alert</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
  <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="about.php">About</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item">
    <li class="nav-item">
      
      <a class="nav-link" href="helpline.php">Helpline</a>
    </li>
    <li class="nav-item ">
      <div class="dropdown">
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
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up' style='font-size:24px'></i></button>
<h2 style="text-align: center; margin-top: 30px; margin-bottom: 3px; line-height: 1;text-decoration: underline;">About Website</h2><br>
<div class="container"><p class="textup1" style="text-align: justify;font-size: 20px;">This website provide you a Cyber Security And Computer Hardware Awareness. Cyber security is security as it is applied to information technology.This includes all technology that stores, manipulates, or moves data, such as computers, data networks, and all devices connected to or included in networks, such as routers and switches. All information techonlogy devices and facilities need to be secured against intrusion, unauthorised use and vandalium. Additionally the user of information technology should be protected from theft of assets, extorsion, identity theft, loss of privacy and confidentiability of personal information, malicious mischief, damage to equipment, business process compromise, and the general activity of cybercriminals. The general public should be protected against act of cyberterrorism, such as the compromise or loss of electric power grid. Cyber security is a major endevour of the IT industry. There are a number of professional certifications given for cybersecurity training and expertise. although billions of dollars are spent annually on cybersecurity, no computer or network is immune from attacks or can be considered complrtely secure. The single most expensive loss due to a cybersecurity exploit was the ILOVEYOU or LOve Bug email worm which cost an estimated 8.7 billion American dollars.</p><br><br>
<table class="textup1" style="border-spacing: 10px; padding: 5px;">
  <tr class="textup1" style="border-spacing: 50px; padding: 2px;"><div class="card-columns">
  <div class="card" style="height: 20rem;">
            <div class="card-block textup1">
                <h4 class="card-title textup1"><i class='fas fa-desktop' style='font-size:24px'></i><br>Desktop Service</h4>
                <p class="card-text textup1" style="font-size: 20px; text-align: justify;">computer maintenance is the practice of keeping computer in a good state of repair. A computer containing accumulated dust and debris may not run properly.Dust and debris will accumulate as a result of air cooling. Any filters used to mitigate this need regular service and changes.</p>
            </div>
        </div>
  <div class="card" style="height: 20rem;">
            <div class="card-block textup1">
                <h4 class="card-title textup1"><i class='fas fa-laptop' style='font-size:24px'></i><br>Laotop Service</h4>
                <p class="card-text textup1" style="font-size: 20px; text-align: justify;">A computer repair technician is a person who repairs and maintaining computers and services. The technician responsibilities may extend to include building or configuring new hardware. Installing and updating software packages and creating and maintaining computer networks.</p>
            </div>
        </div>
  <div class="card" style="height: 20rem;">
            <div class="card-block textup1">
                <h4 class="card-title textup1"><i class='fas fa-database' style='font-size:24px'></i><br>Data Recovery</h4>
                <p class="card-text textup1" style="font-size: 20px; text-align: justify;">A computing data recovery is a process of retrieving, in accessible,lost or corrupted,damaged or formatted data from secondary storage,removable media or files when the data stored in them cannot be accessed in a usual way.</p>
            </div>
        </div>
      </div>
    </tr>
    <tr class="textup1" style="border-spacing: 30px; padding: 5px;">
      <div class="card-columns">
  <div class="card" style="height: 25rem;">
            <div class="card-block textup1">
                <h4 class="card-title textup1"><i class='fas fa-th-large' style='font-size:24px'></i><br>Software Installation</h4>
                <p class="card-text textup1" style="font-size: 20px; text-align: justify;">Installation (or setup) of a computer program( including devices,drivers and plugins) is the act of making the program ready for execution, installation refers to the particular configuration of a software or hardware with a view to making it usable with the computer. A soft or digital copy of a piece of software(program) is needed to install it.</p>
            </div>
        </div>
  <div class="card" style="height: 25rem;">
            <div class="card-block textup1">
                <h4 class="card-title textup1"><i class='fas fa-project-diagram' style='font-size:24px'></i><br>Computer Networking</h4>
                <p class="card-text textup1" style="font-size: 20px; text-align: justify;">A computer network is a group of computers that use a set of common communication protocols over digital interconnections for the purpose of sharing resources located on or provided by the network nodes.The interconnections between nodes are formed from a broad spectrum of telecommunication network technologies, based on physically wired.</p>
            </div>
        </div>
  <div class="card" style="height: 25rem;">
            <div class="card-block textup1">
                <h4 class="card-title textup1"><i class='far fa-snowflake' style='font-size:24px'></i><br>Phishing</h4>
                <p class="card-text textup1" style="font-size: 20px; text-align: justify;">Phishing is a fraudulent attempt to obtain sensitive information or data, such as usernsme, passwords and credit card details, by disguising oneself as a trustworthy entity in an electronic communication. Typically carried out by email spoofing, instant messaging, phishing often directs user to interpersonel information that took and test of the site.</p>
            </div>
        </div>
      </div>
    </tr>
    </table>
  </div>
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
                         <p><a href="#" style="color: #6c757d;">Terms&Condition</a></p>
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