 <a class="navbar-brand" href="#">Virtual Crime Alert</a>

  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="#">Contact</a>
    </li>
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </ul>
</nav>

  
  <div class="carousel slide" data-ride="carousel" data-interval="1300" id="carouselExampleCaptions">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img5.webp">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img6.webp">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img7.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon">&nbsp&nbsp&nbsp&nbsp&nbspPrevious</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon">&nbsp&nbsp&nbsp&nbsp&nbspNext</span>
  </a>
  <ul class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ul>
</div>
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container class.</p> 
  <p>The .container class provides a responsive fixed width container.</p>
  <p>Resize the browser window to see that its width (max-width) will change at different breakpoints.</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .item, img{
        height: 100% !important;
        width:  100% !important;
        border: 1px solid red;
    }
</body>
</html>
 .carousel-item {
     height: 100vh;
     min-height: 300px;
     background: no-repeat center center scroll;
     -webkit-backgroud-size: cover;
     background-size: cover;
  }
  .carousel-caption{
        bottom: 220px;
    }
  .carousel-caption h5{
    font-size:45px;
    text-transform:uppercase;
    letter-spacing:2px;
    margin-top:25px;
    font-family:merienda;
    }
    .carousel-caption p{
      font-size:20px;
      width: 60%;
      margin: auto;
      line-height: 1.9;
      font-family: poppins;
      }
  .navbar-nav a{
    font-family:poppins;
    font-size:25px;
    text-transform:uppercase;
    font-weight:bold;
    }
    .navbar-light .navbar-brand{
      color:#fff;
      font-size:25px;
      text-transform:uppercase;
      font-weight:bold;
      letter-spacing:2px;
    }
  .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show >.nav-link{
    color:#fff;
    }
    .navbar-light .navbar-nav .nav-link{
      color:#fff;
    }
    .navbar-nav{
      text-align:center;
    }
  .nav-link{
    padding:2rem 1rem;
   }
   .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color:#fff !important;
    }
    .w-100{
      height:100vh;
    }
    @media only screen and (max-width: 767px){
      .navbar-nav.ml-auto{
        background: rgba(0,0,0,0.5);
        }
        .navbar-toggler{
          padding:1px 5px;
          font-size:18px;
          line-height:0.3;
          background:#fff;
        }
    } 
    
    a:hover,a:focus{
    text-decoration: none;
    outline: none;
}