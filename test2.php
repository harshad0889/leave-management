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
<center><div class="split left">
<div class="centered">
<br><br><br><br><br><br><br><br><br><br><br>
<?php
$con=mysqli_connect("localhost","root","","leave");
$sql = "SELECT leave_appno,name,dpt,sem,leave_from,leave_to,no_days,reason FROM leave_application";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
 <tr>
<th>App_no</th>
<th>name</th>
<th>dpt</th>
<th>sem</th>
<th>leave_from</th>
<th>leave_to</th>
<th>no_days</th>
<th>reason</th>
 </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["leave_appno"]. "</td><td>" . $row["name"]. "</td> <td>" . $row["dpt"]. "</td><td>" . $row["sem"]. "</td><td>" . $row["leave_from"]. "</td><td>" . $row["leave_to"]. "</td><td>" . $row["no_days"]. "</td><td>" . $row["reason"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$con->close();
?> 
</div>
</center>
</body>
</html>
