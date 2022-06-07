 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo Time(); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
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
input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
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

 .social {
     font-size: 21px !important
 }

 .rights {
     font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
 }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Virtual Crime Alert</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
  <span class="navbar-toggler-icon"></span>
</button>
  
</div>
</nav>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up' style='font-size:24px'></i></button>
<div class="jumbotron jumbotron-fluid" style="background-image: url(images/img9.jpg); background-size: 100%;margin-bottom: 0px;">
<div class="container" style=" width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; margin-top: 100px;">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header" style="background-color: #1d2124;">
        <h3 style="color: #dae0e5;"><i class='fas fa-user-alt ' style='font-size:24px'></i>&nbsp;LogIn</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><a href="https://www.facebook.com/"><i class="fab fa-facebook-square" style="font-size:48px;color: yellow;"></i></a></span>&nbsp;
          <span><a href="https://accounts.google.com/"><i class="fab fa-google-plus-square" style="font-size:48px;color: yellow;"></i></a></span>
        </div>
      </div>
      <div class="card-body" style="background-color: #212529;">
        <form action="validation.php" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username" name="username">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer" style="background-color:#1d2124;">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="signup.php" style="color: #ffc107;">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#" style="color: #ffc107;">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
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