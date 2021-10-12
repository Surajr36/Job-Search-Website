<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert Jobs</title>
</head>

<body>
	<?php

	$txtTitle = $_POST['txtTitle'];
	$txtTotal = $_POST['txtTotal'];
	$cmbQual = $_POST['cmbQual'];
	$txtDesc = $_POST['txtDesc'];
	$Name = $_SESSION['Name'];
	if ($cmbQual == "Other") {
		$cmbQual = $_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");

	// Specify the query to Insert Record
	$sql = "insert into job_master (CompanyName,JobTitle,Vacancy,MinQualification,Description) values('" . $Name . "','" . $txtTitle . "','" . $txtTotal . "','" . $cmbQual . "','" . $txtDesc . "')";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("Job Inserted Succesfully");window.location=\'ManageJob.php\';</script>';

	?>
</body>

</html>