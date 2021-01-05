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
if(isset($_POST['update']))
    {
        
        $wid=$_POST['wid'];
        $wname=$_POST['wname'];
        $fees=$_POST['fees'];
        $duration=$_POST['duration'];
       
        $res2="UPDATE $tbl_name set wname='$wname',fees='$fees',duration='$duration' where wid='$wid'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        header('location:disp.html');
    }
?>

<?php
$wid=$_POST['wid'];
$res1="select * from workshop where wid='$wid'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
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
<html>
    <head>
        <title>Edit details</title>
    </head>
    <body>
    <body style="background-image:url('index1.jpg')";>
        <br/><br/>
        <form name="form1" method="post" action="">
            <table border="0">
                <h2>Update the required fields..!</h2>
                <tr>
                    <td>WID</td>
                    <td><input type="uniqid" name="wid" value="<?php echo $wid;?>" ></td>
                </tr>
                <tr>
                    <td>WNAME</td>
                    <td><input type ="text" name="wname" value="<?php echo $wname;?>" ></td>
                </tr>
                <tr>
                    <td>FEES</td>
                    <td><input type ="text" name="fees" value="<?php echo $fees;?>" ></td>
                </tr>
                <tr>
                    <td>DURATION</td>
                    <td><input type ="text" name="duration" value="<?php echo $duration;?>" ></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>


            
        