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

  <title>Feedback - JOB PORTAL</title>

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
            <h2><span><a href="#">Feedback </a></span></h2>


            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#A0B9F3"><strong>Give Your Feedback</strong></td>
              </tr>
              <tr>
                <td>
                  <form id="form1" method="post" action="InsertFeedback.php">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>Feedback:</td>
                        <td><span id="sprytextarea1">
                            <label>
                              <textarea name="txtFeedback" id="txtFeedback" cols="35" rows="5"></textarea>
                            </label>
                            <span class="textareaRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                      </tr>
                    </table>
                  </form>
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