<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="styles.css" rel="stylesheet" type="text/css">
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
$connection = mysqli_connect("localhost", "root", "","leave"); // Establishing Connection with Server
//$db = mysqli_select_db("leave", $connection); // Selecting Database
//MySQL Query to read data
$query = mysqli_query($connection,"select * from leave_application" );
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='formdiv.php?id={$row['id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysqli_query($connection,"select * from leave_application where id='$id'" );
while ($row1 = mysqli_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>leave_appno:</span> <?php echo $row1['leave_appno']; ?><br>
<span>id:</span> <?php echo $row1['id']; ?><br>
<span>name:</span> <?php echo $row1['name']; ?><br>
<span>dpt:</span><?php echo $row1['dpt'];?><br>
<span>sem:</span><?php echo $row1['sem'];?><br>
<span>leave_from:</span><?php echo $row1['leave_from'];?><br>
<span>leave_to:</span><?php echo $row1['leave_to'];?><br>
<span>no_days:</span><?php echo $row1['no_days'];?><br>
<span>reason:</span><?php echo $row1['reason'];?><br>
<input type="submit" value="Accept" name="Accept">&nbsp;<input type="submit" value="reject" name="reject">
<?php 
$leave_appno = $_GET['id'];

$con = mysqli_connect("localhost", "root", "","leave");
if(isset($_POST['Accept']))
{
   $sql1 ="update check_status set status='accept' where leave_appno=$id";
mysqli_query($con,$sql1);
   echo "<script>document.stat.reject.disabled=true;</script>";
}

if(isset($_POST['reject']))
{
$sql2 ="update check_status set status='reject' where leave_appno='$id'";
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
