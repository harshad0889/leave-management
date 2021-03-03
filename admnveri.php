<html>
<head>
<title>Admin verification</title>
</head>
<body >
<form method="post" name="reg1" onsubmit="return val()">
<center><table cellpadding="3" cellspacing="8">
<tr>
<th>name</th>
<td><input type="text" name="name" value+></td>
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
$sql ="select leave_appno,name,dpt,sem,leave_from,leave_to,no_days,reason from leave_application";
mysqli_query($con,$sql);

