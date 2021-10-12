<?php
session_start();
if (isset($_SESSION['$UserName_emp'])) {
} else {
  header('location:../index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>Employer Profile</title>

  <link rel="index" href="./" title="Home" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
  <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
  <style type="text/css">
    .style1 {
      color: #000066;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- Main -->
  <div id="main" class="box">
    <?php
    include "Header.php"
    ?>
    <?php
    include "menu.php"
    ?>
    <!-- Page (2 columns) -->
    <div id="page" class="box">
      <div id="page-in" class="box">
        <!-- Content -->
        <div id="content">
          <!-- Article -->
          <div class="article">
            <h2><span><a href="#">Welcome <?php echo $_SESSION['$UserName_emp']; ?></a></span></h2>
            <?php
            $ID = $_SESSION['ID'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");

            $sql = "select * from employer_reg where EmployerId ='" . $ID . "'  ";
            // Execute query
            $result = mysqli_query($con, $sql);
            // Loop through each records 
            $row = mysqli_fetch_array($result)
            ?>
            <table width="100%" border="1" cellspacing="2" cellpadding="2">
              <tr>
                <td><strong>Company ID:</strong></td>
                <td><?php echo $row['EmployerId']; ?></td>
              </tr>
              <tr>
                <td><strong>Company Name:</strong></td>
                <td><?php echo $row['CompanyName']; ?></td>
              </tr>
              <tr>
                <td><strong>Contact Person:</strong></td>
                <td><?php echo $row['ContactPerson']; ?></td>
              </tr>
              <tr>
                <td><strong>Address:</strong></td>
                <td><?php echo $row['Address']; ?></td>
              </tr>
              <tr>
                <td><strong>City:</strong></td>
                <td><?php echo $row['City']; ?></td>
              </tr>
              <tr>
                <td><strong>Email:</strong></td>
                <td><?php echo $row['Email']; ?></td>
              </tr>
              <tr>
                <td><strong>Mobile:</strong></td>
                <td><?php echo $row['Mobile']; ?></td>
              </tr>
              <tr>
                <td><strong>Area of Work:</strong></td>
                <td><?php echo $row['Area_Work']; ?></td>
              </tr>
              <tr>
                <td><strong>User Name:</strong></td>
                <td><?php echo $row['UserName']; ?></td>
              </tr>

              <tr>
                <td>&nbsp;</td>
                <td><a href="EditProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>">Edit Profile</a></td>
              </tr>
            </table>
            <?php
            mysqli_close($con);
            ?>
            <p>&nbsp;</p>

            <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->
        </div> <!-- /content -->

        <?php
        include "right.php"
        ?>

      </div> <!-- /page-in -->
    </div> <!-- /page -->


    <?php
    include "footer.php"
    ?>
  </div> <!-- /main -->

</body>

</html>
