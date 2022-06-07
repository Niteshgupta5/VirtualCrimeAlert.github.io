           <!DOCTYPE html>
           <html>
           <head>
               <title></title>
               .flip-box {
  background-color: transparent;
  height: 200px;
  border: none;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side */
.flip-box-front {
  background: #343a407d;
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color:#343a407d;
  color: black;
  transform: rotateX(180deg);
} 
           </head>
           <body>
<div class="flip-box container-fluid" style="position: absolute; top:380px;">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Front Side</h2>
    </div>
    <div class="flip-box-back">
      <h2>Back Side</h2>
    </div>
  </div>
</div>
<table style="border-spacing: 10px; padding: 5px;"><tr class="row" style="align-self: flex-end;"><td class="col-md-8 " style="padding: 30px; width: 100%;"><div style="border:0px solid; width: 100%;">

	<td class="col-md-3" style="margin-right: 5px;margin-left: 75px;float: left;">


    <div style="border: 1px solid black;text-align: center;width: 30%;height: 50%;position: absolute;top: 150px;margin-left: 450px;">
    <h1>Sign Up</h1>
<form action="user.php" style="margin-top:80px;">
  <div class="form-group">
    <label for="user"><strong>Username:</strong></label>
    <input type="text" class="form-control" placeholder="Enter email" id="email" name="username">
  </div><br>
  <div class="form-group">
    <label for="pwd"><strong>Password:</strong></label>
    <input type="password" class="form-control" placeholder="Enter password" id="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>







<div class="d-flex justify-content-center h-100" style="width: 30%;margin-top: 200px;margin-left: 500px;position: absolute;">
    <div class="card">
      <div class="card-header" style="background-color: #1d2124;height: 50px;">
        <h3 style="color: #dae0e5;"><i class='fas fa-user-alt ' style='font-size:32px'></i>&nbsp;Sign Up</h3></div></div>
  <div class="card-body" style="background-color: #212529;height: 200px;padding: 20px;">
        <form action="user.php" method="post" style="margin-top: 30px;width: 100%;">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="username" name="username" size="40">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="password" name="password" size="40">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" value="submit" class="btn float-right login_btn">
          </div>
        </form>
      </div>
  </div>
            </body>
           </html>

           