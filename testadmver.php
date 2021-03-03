
<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>

</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "","leave"); // Establishing Connection with Server
$db = mysql_select_db("leave", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from leave_application", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href="testadmver.php?id={$row['leave_appno']}">{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from leave_application where leave_appno=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['name']; ?>
<span>dept:</span> <?php echo $row1['dpt']; ?>
<span>sem:</span> <?php echo $row1['sem']; ?>
<span>lvfrom:</span> <?php echo $row1['leave_from'];?>
<span>lvto:</span> <?php echo $row1['leave_to'];?>
<span>days:</span> <?php echo $row1['no_days'];?>
<span>reason:</span> <?php echo $row1['reason'];?>
</div>

<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>

