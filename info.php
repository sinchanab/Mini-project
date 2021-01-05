<?php 
$servername = "localhost"; 
$username = "";
 $password = "";
 $dbname = "test";
 $tbl_name="info";
 $conn = mysqli_connect($servername, $username, $password, $dbname) or 
 die(Mysqli_error());
 $select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
 $sql = "SELECT * FROM $tbl_name";
 $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
 $count=mysqli_num_rows($result); 
?> 
  <body style="background-image:url('index1.jpg')";>
<table align="center" width="483" height="96" border="1"> 
    <h2 align="center">...Workshop Informations...</h2>
<tr> 
    
<td width="75">wid</td>
 <td width="75">wname</td>
 <td width="75">sid</td> 

 </tr>
 
  
 <?php
  
 if ($count>0) 
{
 while($row = mysqli_fetch_assoc($result)) 
{ ?>
 <tr>
 <td>&nbsp;<?php echo $row['wid']; ?> </td>
 <td>&nbsp;<?php echo $row['wname']; ?> </td>
 <td>&nbsp;<?php echo $row['sid']; ?> </td> 
 
 </tr>
 
 <?php
 }
 }

 else
 {
     echo "0 results";
 }
 
 mysqli_close($conn);
 ?>
 