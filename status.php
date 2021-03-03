
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<center>
<br><br><br><br><br><br><br><br><br><br><br>
<?php
$con=mysqli_connect("localhost","root","","leave");
$sql = "SELECT leave_appno, status FROM check_status";
$result = $con->query($sql);

if ($result->num_rows > 0)  
  {
    echo "<table><tr><th>App_no</th><th>Status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
   {
        echo "<tr><td>" . $row["leave_appno"]. "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
 } 
else 
  {
    echo "0 results";
  }

$con->close();
?> 
</center>
</body>
</html>
