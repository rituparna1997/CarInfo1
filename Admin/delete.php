<?php
session_start();
$con = mysqli_connect("http://54.90.116.248/","root","Iam@1234","carinfo") or die("connection was not created");
$carid = $_GET['cid'];
if(!isset($_SESSION['username'])){
    //$_SESSION['username'];
   header("location:../index.php");
}
else{
	$qry ="delete from cars where cid=$carid";
	mysqli_query($con,$qry);
	header("location:viewaddedcars.php");
}