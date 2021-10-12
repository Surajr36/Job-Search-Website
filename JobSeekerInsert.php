<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert into Database</title>
</head>

<body>
	<?php

	$Name = $_POST['txtName'];
	$Address = $_POST['txtAddress'];
	$City = $_POST['txtCity'];
	$Email = $_POST['txtEmail'];
	$Mobile = $_POST['txtMobile'];
	$Qualification = $_POST['txtQualification'];
	$Gender = $_POST['cmbGender'];
	$BirthDate = $_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status = "Pending";
	$UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	$Question = $_POST['cmbQue'];
	$Answer = $_POST['txtAnswer'];
	$UserType = "JobSeeker";
	if ($Qualification == "Other") {
		$Qualification = $_POST['txtOther'];
	}
	move_uploaded_file($_FILES["txtFile"]["tmp_name"], "upload/"  . $_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");
	// Select Database	mysql_select_db("job", $con);

	$sql = "insert into jobseeker_reg(JobSeekerName,Address,City,Email,Mobile,Qualification,Gender,BirthDate,Resume,Status,UserName,Password,Question,Answer) VALUES ('$Name','$Address','$City','$Email','$Mobile','$Qualification','$Gender','$BirthDate','$path1','$Status','$UserName','$Password','$Question','$Answer')";
	// execute query
	var_dump($sql);
	if (mysqli_query($con, $sql)) {
		echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
	}

	// Close The Connection
	mysqli_close($con);
	?>
</body>

</html>