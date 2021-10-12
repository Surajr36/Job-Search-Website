<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Profile</title>
</head>

<body>
    <?php
    $txtId = $_POST['txtId'];
    $txtName = $_POST['txtName'];
    $txtContact = $_POST['txtContact'];
    $txtAddress = $_POST['txtAddress'];
    $txtCity = $_POST['txtCity'];
    $txtEmail = $_POST['txtEmail'];
    $txtMobile = $_POST['txtMobile'];
    $txtArea = $_POST['txtArea'];
    $txtUser = $_POST['txtUser'];
    $txtPassword = $_POST['txtPassword'];
    // Establish Connection with MYSQL
    $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");
    // Select Database

    // Specify the query to Update Record
    $sql = "update employer_reg  set CompanyName='" . $txtName . "',ContactPerson='" . $txtContact . "',Address='" . $txtAddress . "',City='" . $txtCity . "',Email='" . $txtEmail . "',Mobile='" . $txtMobile . "',Area_Work='" . $txtArea . "',UserName='" . $txtUser . "',Password='" . $txtPassword . "' where EmployerId=" . $txtId . "";
    // Execute query
    mysqli_query($con, $sql);
    // Close The Connection
    mysqli_close($con);
    echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
    ?>
</body>

</html>