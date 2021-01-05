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
$sid=$_POST['sid'];
$name=$_POST['name'];
$sem=$_POST['sem'];
$Dept_no=$_POST['Dept_no'];
$email=$_POST['email'];
$password=$_POST['password'];
$q="SELECT sid FROM student WHERE sid='$sid'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret ==true)
{
    echo '<script language="javascript">';
    echo 'alert("User already exists");';
    echo 'window.location.href=register.php";';
    echo '</script>';
    
}
else{
$query="INSERT INTO student VALUES('$sid','$name','$sem','$Dept_no','$email','$password')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
echo '<script language="javascript">';
echo 'alert("You Are registerted");';
echo 'window.location.href="log.html";';
echo '</script>';
} }
Mysqli_close($conn);
?>
