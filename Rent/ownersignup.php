<?php
session_start();
include("connection.php");
$name=$_GET['f'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];
$nhouse=$_GET['n'];
$country=$_GET['c'];
$state=$_GET['s'];
$city=$_GET['ci'];
$add=$_GET['a'];

if($_GET['submit'])
{
	if($name!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into owner(name,email,pwd,mobile_no,occupation,no_of_houses,country,state,city,address) values('$name','$email','$pwd','$mob','$occ','$nhouse','$country','$state','$city','$add')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				$_SESSION['uname']=$name;
				header('location:home.php');
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Sign up unsuccessfull')
        window.location.href='index.html';
        </script>";
			}
	}
}
?>