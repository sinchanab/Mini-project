<html>
    <head>
        <title> delete record </title>
    </head>
    <body>
        <table border=1 cellpadding=1 cellspacing=1>
            <tr>
                 <th>sid</th>
                <th>name</th>
                <th>sem</th>
                <th>Dept_no</th>
                <th>Delete</th>
                
            </tr>
            <?php
            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'test');
            $sql="SELECT * FROM student";
            $records = mysqli_query($con,$sql);
			
        while($row = mysqli_fetch_array($records))
        {
           
           
           echo "<td>".$row['sid']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['sem']."</td>";
            echo "<td>".$row['Dept_no']."</td>";
            echo "<td><a href=delete.php?sid=".$row['sid'].">Delete</a></td>";
		}
			?>
            
        
            </table>
    </body>
</html>