<html>
<head>
<title>leaveapply</title>
</head>
<body >
<center><h1>LEAVE APPLICATION</h1></center>
<form method="post" name="reg1" onsubmit="return val()">
<center><table cellpadding="3" cellspacing="8">
<tr>
<th>id</th>
<td><input type="number" name="id"></td>
</tr><br>
<tr>
<th>name</th>
<td><input type="text" name="name"></td>
</tr><br>
<tr>
<th>department</th>
<td><select name="dpt">
 <option>select</option>
 <option value="mba">MBA</option>
  <option value="mca">MCA</option>
  </select></td></tr>
<tr>
<th>semester</th>
<td><select name="sem">
<option>select</option>
<option>s1</option>
<option>s2</option>
<option>s3</option>
<option>s4</option>
<option>s5</option>
<option>s6</option></td>
</tr><br>

<tr>
<th>leave_from</th>
<td><input type="date" name="leave_from"></td>
</tr><br>
<tr>
<tr>
<th>leave_to</th>
<td><input type="date" name="leave_to"></td>
</tr><br>
<tr><tr>
<th>no_days</th>
<td><input type="number" name="no_days"></td>
</tr><br>
<tr>
<tr>
<th>reason</th>
<td><textarea cols="15" rows="5" name="reason"></textarea></td>
</tr><br>
<tr><td><input type="submit" name="submit1" value="Apply" align="center">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" align="center"></td></tr>
</center>
<?php
$con=mysqli_connect("localhost","root","","leave");

if(isset($_POST['submit1']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$dpt=$_POST['dpt'];
$sem=$_POST['sem'];
$leave_from=$_POST['leave_from'];
$leave_to=$_POST['leave_to'];
$no_days=$_POST['no_days'];
$reason=$_POST['reason'];

$sql1 ="insert into leave_application(id,name,dpt,sem,leave_from,leave_to,no_days,reason)values($id,'$name','$dpt','$sem','$leave_from','$leave_to','$no_days','$reason')";
$sql2 ="insert into check_status(leave_appno,status)values('$id','pending')";
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);
echo "<script> alert('success') </script>";
}
?>
</body>
</html>

