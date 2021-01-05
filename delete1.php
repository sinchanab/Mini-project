<?php
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'test');
$sql="DELETE FROM workshop WHERE wid='$_GET[wid]'";
if(mysqli_query($con,$sql))
{
echo "deleted";
header("refresh:1; url=indelete1.php");
}
else
echo "NOT DELETED";
?>