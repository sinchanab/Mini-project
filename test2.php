<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="coordinator";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT*FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
$cid=$_POST['cid'];
$name=$_POST['cname'];
$dept_no=$_POST['dept_no'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$q="SELECT cid FROM coordinator WHERE cid='$cid'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2style='color:red'>cid already exists</h2></center>";
}
else{
$query="INSERT INTO coordinator VALUES('$cid','$name','$dept_no','$phone','$email','$password')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
echo '<script language="javascript">';
echo 'alert("You Are registerted");';
echo 'window.location.href="log1.html";';
echo '</script>';
}
}
Mysqli_close($conn);
?>
