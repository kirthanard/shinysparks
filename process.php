<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $hid = $_POST['hid'];
	 $hname = $_POST['hname'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $sql = "INSERT INTO hospital (hid,hname,address,city,phone,email)
	 VALUES ('$hid','$hname','$address','$city','$phone','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>