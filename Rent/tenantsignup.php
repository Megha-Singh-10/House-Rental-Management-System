<?php
include("connection.php");
$fname=$_GET['f'];
$lname=$_GET['l'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];

if($_GET['submit'])
{
	if($fname!="" && $lname!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into tenant values('$fname','$lname','$email','$pwd','$mob','$occ')";
		$data=mysqli_query($conn,$query);
		if($data)

			echo 1;
		else
			echo 2;
	}
}

?>
<?php
session_start();
include("connection.php");
$fname=$_GET['f'];
$lname=$_GET['l'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];

if($_GET['submit'])
{
	if($fname!="" && $lname!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into tenant(fname,lname,email,pwd,mobile_no,occupation) values('$fname','$lname','$email','$pwd','$mob','$occ')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				$_SESSION['uname']=$fname;
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