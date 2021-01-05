<html>
    <head>
        <title> delete record from workshop </title>
    </head>
    
    <body style="background-image:url('index1.jpg')";>
        <table align="center" border=1 cellpadding=1 cellspacing=1>
            <tr>
                 <th>WID</th>
                <th>WNAME</th>
                <th>FEES</th>
                <th>DURATION</th>
                <th>DELETE</th>
            </tr>
            <?php
            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'test');
            $sql="SELECT * FROM workshop";
            $records = mysqli_query($con,$sql);
			
        while($row = mysqli_fetch_array($records))
        {
           
           echo "<tr>";
           echo "<td>".$row['wid']."</td>";
            echo "<td>".$row['wname']."</td>";
            echo "<td>".$row['fees']."</td>";
            echo "<td>".$row['duration']."</td>";
            echo "<td><a href=delete1.php?wid=".$row['wid'].">Delete</a></td>";
            echo "</tr>";
        }
			?>
            
        
            </table>
    </body>
</html>