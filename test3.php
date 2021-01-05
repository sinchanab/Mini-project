<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="workshop";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die (mysqli_error($conn));
$wid=$_POST['wid'];
if(isset($_POST['submit']))
    {
        
        $wid=$_POST['wid'];
        $wname=$_POST['wname'];
        $fees=$_POST['fees'];
        $duration=$_POST['duration'];
       
        $res2="UPDATE $tbl_name set wname='$wname',fees='$fees',duration='$duration' where wid='$wid'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        header('location:disp.php');
    }
?>

<?php
$wid=$_POST['wid'];
$res1="select * from workshop where wid='$wid'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result);
if($cn==TRUE)
    {
        header("Location:dsn.php");
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $wid=$row['wid'];
            $wname=$row['wname'];
            $fees=$row['fees'];
            $duration=$row['duration'];
            
        }
    }   
?>