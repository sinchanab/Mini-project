<?php
    
    $result = mysqli_query($conn,"SELECT * FROM workshop");
?>
<html>
    <head>
        <title>workshop view</title>
        <style>
        th{
            border: 3px solid black;
        }
        td{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>wid</th>
                <th>wname</th>
                <th>fees</th>
                <th>duration</th>
                
            </tr>
            <?php
if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["wid"]; ?></td>
    <td><?php echo $row["wname"]; ?></td>
    <td><?php echo $row["fees"]; ?></td>
    <td><?php echo $row["duration"]; ?></td>
    
    <td><a href='.php?id=<?php echo $row["name"];?>' > Delete </a></td>
</tr>
<?php
$i++;
}
}
?>

        </table>
        <a href="events.php">Back</a>
    </body>
</html>