<! doctype html>
<html>
<head>
<metacharset="utf 8">
</head>


<body>

<center><h1>LOGIN</h1></center>
<form method="post" name="log1">
<center><table cellpadding="3" cellspacing="8">
<tr>
<th>USERNAME</th>
<td><input type="text" name="username"></td>
</tr><br>
<tr>
<th>PASSWORD</th>
<td><input type="password"name="pass1"></td>
</tr><br>
<tr>
<td><input type="submit" name="submit1" value="Login" align="center"></td>
</tr><br>
<tr>
<td><a href="register.php">register</a></td>
</tr>
</table>
</form>




<?php 
$con=mysqli_connect("localhost","root","","leave");


if(isset($_POST['submit1']))
{
	
		$username=$_POST['username'];
		$password=$_POST['pass1'];

   if($username=='admin' && $password=='admin')
	{
		header("Location:formdiv.php");
	}
	else
	{

$suser ="select username from register where username='$username'";
$user=(mysqli_query($con,$suser));
$ulist=mysqli_fetch_array($user);

$spwd ="select pass1 from register where pass1='$password'";
$pwd=(mysqli_query($con,$spwd));
$plist=mysqli_fetch_array($pwd);

if(($ulist['username']==$username) && ($plist['pass1']==$password))
{
 echo "<script> alert('login succesfully'); </script>";
header("Location:stdlog.php");
}
else
{
echo "incorrect password";
}
}
}
?>
</body>
</html>
