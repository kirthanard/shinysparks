<?php
include_once 'connection.php';
if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE disease set did='" . $_POST['did'] . "', dname='" . $_POST['dname'] . "', recovery_no='" . $_POST['recovery_no'] . "', hid='" . $_POST['hid'] . "' WHERE did='" . $_POST['did'] . "'");
}
$result = mysqli_query($conn,"SELECT * FROM disease WHERE did='" . $_GET['did'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update disease Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="padding-bottom:5px;">
<a href="viewdisease.php">Diseases</a>
</div>
diseases id: <br>
<input type="hidden" name="did" class="txtField" value="<?php echo $row['did']; ?>">
<input type="text" name="did"  value="<?php echo $row['did']; ?>">
<br>
Diseases Name: <br>
<input type="text" name="dname" class="txtField" value="<?php echo $row['dname']; ?>">
<br>
Recovery No:<br>
<input type="text" name="recovery_no" class="txtField" value="<?php echo $row['recovery_no']; ?>">
<br>
Hospital Id:<br>
<input type="text" name="hid" class="txtField" value="<?php echo $row['hid']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>