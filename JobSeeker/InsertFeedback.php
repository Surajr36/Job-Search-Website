<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert Feedback</title>
</head>

<body>
	<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	$FeedBack = $_POST['txtFeedback'];
	$FDate = date('y/m/d');
	$Id = $_SESSION['ID'];

	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");

	// Specify the query to Insert Record
	$sql = "INSERT INTO feedback(JobSeekId,Feedback,FeedbakDate) values('" . $Id . "','" . $FeedBack . "','" . $FDate . "')";
	echo $sql;
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);

	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';

	?>
</body>

</html>