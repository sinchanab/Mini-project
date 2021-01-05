<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="coordinator";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['email'])&& isset($_POST['pass']))
{
	$mail=$_POST['email'];
	$pswd=$_POST['pass'];
	$ab="SELECT * FROM coordinator WHERE email='$mail' and password='$pswd'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt==true)
	{
		echo"<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
		header("Location: adminhome.html"); 

	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Wrong Credentials Entered");';
		echo 'window.location.href="log.html";';
		echo '</script>';

		
	}
}
Mysqli_close($con);
?>
