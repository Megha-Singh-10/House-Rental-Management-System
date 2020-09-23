<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rent";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
?>