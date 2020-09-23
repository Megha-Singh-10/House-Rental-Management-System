<?php
session_start();
include("connection.php");
$ownerid=$_GET["o"];
$nrooms=$_GET['n'];
$rate=$_GET['ra'];
$pics=$_GET['u'];
$country=$_GET['c'];
$state=$_GET['s'];
$city=$_GET['city'];
$add=$_GET['a'];
$desc=$_GET['de'];
/*$folder="house/";
$_FILES["p"];
$pics= "images/".basename($_FILES['p']['name']);*/

if($_GET['submit'])
{
	if($ownerid!="" && $nrooms!="" && $desc!="")
	{
     // $pics = addslashes(file_get_contents($_FILES["p"]["tmp_name"]));
     /*
//you keep your column name setting for insertion. I keep image type Blob.
$query = "INSERT INTO products (id,image) VALUES('','$image')";  
$qry = mysqli_query($conn, $query);*/

//$image = addslashes(file_GET_contents($_FILES['$pics']));



		$query="insert into house(owner_id,no_of_rooms,rate,pics,country,state,city,address,description) values('$ownerid','$nrooms','$rate','{$pics}','$country','$state','$city','$add','$desc')";
		$data=mysqli_query($conn,$query);
		
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='houses.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='houses.php';
        </script>";
			}
	}
}
?>