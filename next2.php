<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="info";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
  $wid=$_POST['wid'];
  $wname=$_POST['wname'];
  $sid=$_POST['sid'];
	
	$q="SELECT wid FROM info WHERE wid='$wid'";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'> already exists</h2></center>";
	}
	else
	{
		$query="INSERT INTO info VALUES('$wid','$wname','$sid')";
		mysqli_query($conn,$query)or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
	}
}
Mysqli_close($conn);
?>