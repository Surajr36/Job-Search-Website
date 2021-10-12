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

  <title>JOB PORTAL</title>

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
            <h2><span><a href="#">Welcome To Control Panel</a></span></h2>


            <table width="100%" border="0">
              <tr>
                <td>
                  <div align="center"><img src="design/Home.png" alt="" width="64" height="64" /></div>
                </td>
                <td>
                  <div align="center"><img src="design/Profile.png" alt="" width="64" height="64" /></div>
                </td>
                <td>
                  <div align="center"><img src="design/Search.png" alt="" width="64" height="64" /></div>
                </td>
              </tr>
              <tr>
                <td bgcolor="#A0B9F3">
                  <div align="center"><a href="index.php"><strong>Home</strong></a></div>
                </td>
                <td bgcolor="#A0B9F3">
                  <div align="center"><a href="Profile.php"><strong>Profile</strong></a></div>
                </td>
                <td bgcolor="#A0B9F3">
                  <div align="center"><a href="ManageJob.php"><strong>Manage JOB</strong></a></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div align="center"><img src="design/Interview.png" alt="" width="64" height="64" /></div>
                </td>
                <td>
                  <div align="center"><img src="design/Feedback.png" alt="" width="64" height="64" /></div>
                </td>
                <td>
                  <div align="center"><img src="design/Log.png" alt="" width="64" height="64" /></div>
                </td>
              </tr>
              <tr>
                <td bgcolor="#A0B9F3">
                  <div align="center"><a href="ManageWalkin.php"><strong>Walkin</strong></a></div>
                </td>
                <td bgcolor="#A0B9F3">
                  <div align="center"><a href="Application.php"><strong>Application</strong></a></div>
                </td>
                <td bgcolor="#A0B9F3">
                  <div align="center"><a href="logout.php"><strong>Logout</strong></a></div>
                </td>
              </tr>
            </table>
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
