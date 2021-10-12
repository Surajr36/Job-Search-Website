<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Send</title>
</head>

<body>
    <?php
    $Id = $_GET['Id'];
    $Email = $_GET['Email'];
    // Establish Connection with MYSQL
    $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");
    // Select Database
    mysql_select_db("job", $con);
    // Specify the query to Update Record
    $sql = "update application_master set Status='Call Latter Send' where ApplicationId=" . $Id . "";
    // Execute query
    mysql_query($sql, $con);
    // Close The Connection
    mysql_close($con);
    echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'Application.php\';</script>';
    ?>
</body>

</html>