<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental Management System</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

  
<div class="container">
  <table border="1" id="customers">
    <tr>
      <th>Tenant ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Date Of Birth</th>
      <th>Occupation</th>
      <th>Relationship with tenant</th>
    </tr>
<?php
include("connection.php");
$query="select * from member";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['t_id']."</td><td>".$result['fname']."</td><td>".$result['lname']."</td><td>".$result['gender']."</td><td>".$result['dob']."</td><td>".$result['occupation']."</td><td>".$result['relationship']."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
