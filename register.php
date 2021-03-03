<! doctype html>
<html>
<head>
<metacharset="utf 8">
<script>
function val()
{
if(document.reg1.roll.value=="")
{
alert("please enter  the roll number ");
}
if(document.reg1.username.value=="")
{
alert("please enter  the username");
}
if(document.reg1.dpt.value=="")
{
alert("please choose department ");
}
if(document.reg1.sem.value=="")
{
alert("please choose semester");
}
if(document.reg1.pass1.value=="")
{
alert("please enter the password ");
}
 
}
</script>
</heads>
<body>

<center><h1>REGISTRATION</h1></center>
<form method="post" name="reg1" onsubmit="return val()">
<center><table cellpadding="3" cellspacing="8">
<tr>
<th>roll.no</th>
<td><input type="text" name="roll"></td>
</tr><br>
<tr>
<th>username</th>
<td><input type="text" name="username"></td>
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

<tr><th>phone number</th>
<td><input type="number" name="num"></td>
</tr><br>

<th>password</th>
<td><input type="text" name="pass1"></td>
</tr><br>

<th> conform password</th>
<td><input type="text" name="pass2"></td>
</tr><br>

<tr>
<td><input type="submit" name="submit"></td>
</tr>
<tr>
<td><input type="reset" name="reset"></td>
</tr><br>

</table>
</form>


</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","leave");
if(isset($_POST['submit']))
{
$roll=$_POST['roll'];
$username=$_POST['username'];
$dpt=$_POST['dpt'];
$sem=$_POST['sem'];
$num=$_POST['num'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
if($pass1==$pass2)
{
 $pass=$pass1;
$sql ="insert into register(roll,username,dpt,sem,num,pass1,pass2)values('$roll','$username','$dpt','$sem','$num','$pass1','$pass2')";
mysqli_query($con,$sql);
echo "<script> alert('success') </script>";
echo $roll,$username,$dpt,$sem,$num,$pass1,$pass2;
}
else
{
echo "<script> alert('password miss match') </script>";
}

}

?>



