<?php
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'test');
$sql="DELETE FROM student WHERE sid='$_GET[sid]'";
if(mysqli_query($con,$sql))
header("refresh:1; url=indelete.php");
else
echo "NOT DELETED";
?>