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
.button1 {
  border-radius: 30px;
  background-color: #212529;
  border: none;
  color: #ffc107;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 50px;
  box-shadow: 2px 2px 2px 2px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
 .table {
    border-collapse: separate;
    text-indent: initial;
    border-spacing: 100px;
}
.table td {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.bg-dark {
    background-color: #1d2124!important;
}
small {
     font-size: calc(12px + (15 - 12) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .bold-text {
     color:#ffc107 !important;

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
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="helpline.php">Helpline</a>
    </li>
    <li class="nav-item ">
    <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</div>
</div>
</nav>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up' style='font-size:24px'></i></button>
<h1 style="text-align: center; margin-top: 30px; margin-bottom: 3px; line-height: 1; text-decoration: underline;">Our Services</h1>
<table class="table table-lg table-light" align="center">
 <div class="table-responsive">
<tbody>
        <tr>
          <td><div class="card" style="width: 18rem;">
  <img src="images/img3.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Password</h5>
    <p class="card-text">Password attacks entail hackers using different methods in an attempt to crack the passwords of users in a network...</p>
  </div>
</div></td>
          <td><div class="card" style="width: 18rem;">
  <img src="images/img7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Phishing</h5>
    <p class="card-text">Phishing is a cyber attack that uses disguised email as a weapon. The goal is to trick...</p>
  </div>
</div></td>
          <td><div class="card" style="width: 18rem;">
  <img src="images/img4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cloud</h5>
    <p class="card-text">Cloud computing services make business applications mobile and cooperative. However, there uses...</p>
  </div>
</div></td>
</tr>
<tr>
          <td><div class="card" style="width: 18rem;">
  <img src="images/img15.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Video Conferencing</h5>
    <p class="card-text">The hacker initiates a VC call using a rogue device,establishes peer-to-peer comm...</p>
  </div>
</div></td>
          <td><div class="card" style="width: 18rem;">
  <img src="images/img14.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Devices</h5>
    <p class="card-text">Device hacking is the practice of manipulating or gaining unauthorized access to devices...</p>
  </div>
</div></td>
          <td><div class="card" style="width: 18rem;">
  <img src="images/img5.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Personal data</h5>
    <p class="card-text">personal data are stolen every year in data breaches.But what's actually do with all the stolen data?... </p>
  </div>
</div></td>
        </tr>
      </tbody>
    </div>
</table>
<div style="text-align: center;"><button class="button1"><span><a href="inform.php" style="color: #ffc107;">Click more</a></span></button></div>
<div class="container">
<h2><strong>Here are 99 quotes by security leaders and advocates that you can apply to your online habits. </strong></h2><br>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;Arguing that you don&#8217;t care about the right to privacy because you have nothing to hide is no different than saying you don&#8217;t care about free speech because you have nothing to say<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Edward Snowden</h3></blockquote>

<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;Security used to be an inconvenience sometimes, but now it&#8217;s a necessity all the time.<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Martina Navratilova</h3></blockquote>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;I think computer viruses should count as life. I think it says something about human nature that the only form of life we have created so far is purely destructive. We&#8217;ve created life in our own image.<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Stephen Hawking</h3></blockquote>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;We’re all going to have to change how we think about data protection.<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Elizabeth Denham</h3></blockquote>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;You know something is wrong when the government declares opening someone else’s mail is a felony but your internet activity is fair game for data collecting.<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">SE.A. Bucchianeri</h3></blockquote>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;Security leaders are under a lot of pressure to show quick wins while knowing full well that everything they do will be heavily scrutinized and challenged, and ultimately, they will pay the price for things that are not under their control.<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Yaron Levi</h3></blockquote>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;As cybersecurity leaders, we have to create our message of influence because security is a culture and you need the business to take place and be part of that security culture<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Britney Hommertzheim</h3></blockquote>
<blockquote class="wp-block-quote"><p><i class='fas fa-quote-left' style='font-size:32px;color:#8be694;'></i>&nbsp;We shouldn’t ask our customers to make a tradeoff between privacy and security. We need to offer them the best of both. Ultimately, protecting someone else’s data protects all of us.<strong>.</strong></p><h3 style="font-style: bold; text-align: right;">Tim Cook</h3></blockquote></div>
<div class="container" style="text-align: right;"><button class="button1" style="border-radius: 80px; width: 110px;"><span><a href="https://pinngle.me/blog/99-inspiring-cybersecurity-quotes/" style="color: #ffc107;">More</a></span></button></div>


<div class="container-fluid pb-0 mb-0 justify-content-center text-light " style="overflow: hidden;
     margin-top: 0px; background: #262626; color: #627482 !important; margin-bottom: 0;padding-bottom: 0">
     <footer  style="font-family: 'Rubik', sans-serif;">
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text" style="font-size: calc(34px + (40 - 34) * ((100vw - 360px) / (1600 - 360))) !important">Virtual Crime Alert</h3>
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