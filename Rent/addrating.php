<?php
session_start();
include("connection.php");
$houseid=$_GET['h'];
$tenantid=$_GET['t'];
$rating=$_GET['r'];
$comment=$_GET['c'];

if($_GET['submit'])
{
	if($houseid!="" && $tenantid!="" && $rating!="")
	{
		$query="insert into rating(id,t_id,rating,comment) values('$houseid','$tenantid','$rating','$comment')";
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