<?php
session_start();
include("connection.php");
$tenantid=$_GET['t'];
$fname=$_GET['f'];
$lname=$_GET['l'];
$occ=$_GET['o'];
$gender=$_GET['g'];
$date=$_GET['d'];
$rel=$_GET['r'];

if($_GET['submit'])
{
	if($tenantid!="" && $fname!="" && $rel!="")
	{
		$query="insert into member(t_id,fname,lname,occupation,gender,dob,relationship) values('$tenantid','$fname','$lname','$occ','$gender','$date','$rel')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='tenant.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='tenant.php';
        </script>";
			}
	}
}
?>