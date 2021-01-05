<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="student";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT*FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
	$sid=$_POST['nm'];
	$name=$_POST['sn'];
	$sem=$_POST['sem'];
	$branch=$_POST['brnch'];
	$mail=$_POST['ml'];
	$pass=$_POST['pwd'];
	$q="SELECT usn FROM student WHERE sid='$sid'";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>USN already exists</h2></center>";
	}
	else
	{
		$query="INSERT INTO student VALUES('$sid','$name','$sem','$branch','$mail','$pass')";
		mysqli_query($conn,$query)or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
	}
}
Mysqli_close($conn);
?>