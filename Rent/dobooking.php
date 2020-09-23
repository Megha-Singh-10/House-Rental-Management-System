<?php
session_start();
include("connection.php");
$tenantid=$_GET['t'];
$houseid=$_GET['h'];
$booking_date=$_GET['b'];
$period=$_GET['p'];
$price=$_GET['pr'];
$agreement=$_GET['a'];

if($_GET['submit'])
{
	if($tenantid!="" && $houseid!="" && $booking_date!="" && $agreement!="" && $price!="")
	{
		$query="insert into booking(t_id,h_id,booking_date,period,price,agreement) values('$tenantid','$houseid','$booking_date','$period','$price','$agreement')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='booking.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='booking.php';
        </script>";
			}
	}
}
?>