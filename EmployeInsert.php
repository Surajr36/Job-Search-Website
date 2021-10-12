<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert Employee</title>
</head>

<body>
	<?php

	$CompnayName = $_POST['txtName'];
	$ContactPerson = $_POST['txtPerson'];
	$Address = $_POST['txtAddress'];
	$City = $_POST['txtCity'];
	$Email = $_POST['txtEmail'];
	$Mobile = $_POST['txtMobile'];
	$Area = $_POST['txtAreaWork'];
	$Status = "Pending";
	$UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	$UserType = "Employer";
	$Question = $_POST['cmbQue'];
	$Answer = $_POST['txtAnswer'];
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");

	// Specify the query to Insert Record
	$sql = "insert into employer_reg(CompanyName,ContactPerson,Address,City,Email,Mobile,Area_Work,Status,UserName,Password,Question,Answer) values('" . $CompnayName . "','" . $ContactPerson . "','" . $Address . "','" . $City . "','" . $Email . "'," . $Mobile . ",'" . $Area . "','" . $Status . "','" . $UserName . "','" . $Password . "','" . $Question . "','" . $Answer . "')";
	// execute query

	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);

	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';

	?>
</body>

</html>