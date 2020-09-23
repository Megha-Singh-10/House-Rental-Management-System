<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental Management System</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">House Rental Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="houses.php">Houses</a></li>
            <li><a href="rating.php">Rating</a></li>
          </ul>
        </li>

        <li><a href="owner.php">Owners</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tenants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="members.php">Members</a></li>
          </ul></li>
        <li><a href="booking.php">Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

         <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();echo $_SESSION['uname'];?></a>
         </li>
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container" style="margin-top:5px ">
<h3><b>Welcome <?php 
 echo $_SESSION['uname'];
 ?></b><br><br></h3>
 <div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="home1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Houses</b></h4><br>
    <p class="card-text">This page contains the details of all Houses.</p><br>
    <a href="houses.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="home1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Owners</b></h4><br>
    <p class="card-text">This page contains the details of all Owners.</p><br>
    <a href="owner.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="home1.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Tenants</b></h4><br>
    <p class="card-text">This page contains the details of all Tenants.</p><br>
    <a href="tenant.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>

</div>

 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="home1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Booking</b></h4><br>
    <p class="card-text">This page contains the details of all Bookings.</p><br>
    <a href="booking.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>

</div>

</div>
</body>
</html>
