<?php
session_start();
if (isset($_SESSION['$UserName_job'])) {
} else {
  header('location:../index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>Applicant Profile</title>

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
            <h2><span><a href="#">Welcome <?php echo $_SESSION['Name']; ?></a></span></h2>

            <?php
            $ID = $_SESSION['ID'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");
            // Specify the query to execute
            $sql = "select * from jobseeker_reg where JobSeekId='" . $ID . "'  ";
            // Execute query
            $result = mysqli_query($con, $sql);
            // Loop through each records 
            $row = mysqli_fetch_array($result)
            ?>
            <table width="100%" border="1" cellspacing="2" cellpadding="2">
              <tr>
                <td><strong>Name:</strong></td>
                <td><?php echo $row['JobSeekerName']; ?></td>
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
                <td><strong>Highest Qualification:</strong></td>
                <td><?php echo $row['Qualification']; ?></td>
              </tr>
              <tr>
                <td><strong>Gender:</strong></td>
                <td><?php echo $row['Gender']; ?></td>
              </tr>
              <tr>
                <td><strong>Birth Date:</strong></td>
                <td><?php echo $row['BirthDate']; ?></td>
              </tr>
              <tr>
                <td><strong>Resume:</strong></td>
                <td><a href="../upload/<?php echo $row['Resume']; ?>" target="_blank"><strong>View</strong></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>

            <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

          <?php
          mysqli_close($con);
          ?>
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