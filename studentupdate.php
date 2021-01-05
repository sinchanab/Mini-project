<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="student";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die (Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$ab=$_POST['Sid'];
if(isset($_POST['update']))
{
    $n=$_POST['name'];
    $pn=$_POST['phoneno'];
    $un=$_POST['user_name'];
    $p=$_POST['password'];
    $rp=$_POST['repassword'];
    $ui=$_POST['user_id'];
    $res2="UPDATE $tbl_name set name='$n',phoneno='$pn',user_name='$un',password='$p',repassword='$rp'
     where user_id='$ui'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
     header('Location:disp.php');
}  
?>

<?php 
$ab1=$_POST['user_id'];
$res1="SELECT * FROM $tbl_name WHERE user_id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    header('Location:dsn.php'); 
}
else{
    while($row=mysqli_fetch_array($result1))
    {
        $name=$row['name'];
        $phoneno=$row['phoneno'];
        $user_id=$row['user_id'];
        $user_name=$row['user_name'];
        $password=$row['password'];
        $repassword=$row['repassword'];
        }
}
