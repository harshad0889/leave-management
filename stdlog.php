<html>
<head>
<title>stdlog</title>
</head>
<body ><br><br><br><br><br><br><br><br><br>
<center>
<form name="myform" method=POST > 
<input type="button" style="height:100px; width:200px" name="leaveapply" value="leaveapply" onclick="document.location.href='leaveappl.php'">
<br><br><br><br><br>
<input type="button" style="height:100px; width:200px" name="statuschek" value="statuscheck" onclick="document.location.href='status.php'">
<br>
</center>
<?php
if(isset($_POST['leaveapply']))
{
 header("Location:leaveappl.php");
 }
if(isset($_POST['statuschek']))
{
 header("Location:status.php");
 }
?>
</body>

</html>
