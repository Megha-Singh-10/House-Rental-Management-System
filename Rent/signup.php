<?php
session_start();
$signupas=$_GET["s"];
 $_SESSION['ltype']=$signupas;
if($signupas=='tenant');
 {
header('Location: tenantsignup.html');
 }
if($signupas=='owner')
{
header('Location: ownersignup.html');
}
?>