<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form name="stat" method=POST>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Leave applicatoin verification</h2>
</div>
<div class="divB">
<div class="divD">
<p>List of applicants</p>
<?php
$connection = mysqli_connect("localhost", "root", "","harshad"); // Establishing Connection with Server
//$db = mysqli_select_db("harshad", $connection); // Selecting Database
//MySQL Query to read data
$query = mysqli_query($connection,"select * from stud" );
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='formdiv.php?id={$row['id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysqli_query($connection,"select * from stud where id='$id'" );
while ($row1 = mysqli_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>id:</span> <?php echo $row1['id']; ?><br>
<span>name:</span> <?php echo $row1['name']; ?><br>
<span>sem:</span><?php echo $row1['sem'];?><br>
<span>dept:</span><?php echo $row1['dept'];?><br><br>
<input type="submit" value="Accept" name="Accept">&nbsp;<input type="submit" value="reject" name="reject">
<?php 
$id = $_GET['id'];
echo $id;
$con = mysqli_connect("localhost", "root", "","harshad");
if(isset($_POST['Accept']))
{
   $sql1 ="update status set status='accept' where id=$id";
mysqli_query($con,$sql1);
   echo "<script>document.stat.reject.disabled=true;</script>";
}

if(isset($_POST['reject']))
{
$sql2 ="update status set status='reject' where id='$id'";
mysqli_query($con,$sql2);
echo "<script>document.stat.Accept.disabled=true;</script>";
}
?>
</div>

<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysqli_close($connection); // Closing Connection with Server
?>
</form>
</body>
</html>
