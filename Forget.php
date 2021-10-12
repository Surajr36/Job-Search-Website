<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>Forget - JOB PORTAL</title>

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
            <h2><span><a href="#">Recover Password</a></span></h2>

            <form id="form2" method="post" action="ForPass.php">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="middle">Select User:</td>
                  <td>
                    <p>
                      <label>
                        <input type="radio" name="rdUser" value="Employer" id="rdUser_0" />
                        Employer</label>
                      <br />
                      <label>
                        <input type="radio" name="rdUser" value="JobSeeker" id="rdUser_1" />
                        JobSeeker</label>
                      <br />
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>User Name:</td>
                  <td><span id="sprytextfield3">
                      <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td>Security Question:</td>
                  <td><select name="cmbQue" id="cmbQue">
                      <option selected="selected">What is Your Pet Name?</option>
                      <option>Who is Your Favourite Person?</option>
                      <option>What is the Name of Your First School?</option>
                    </select></td>
                </tr>
                <tr>
                  <td>Answer:</td>
                  <td><span id="sprytextfield4">
                      <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                      <input type="submit" name="button2" id="button2" value="Submit" />
                    </label></td>
                </tr>
              </table>
            </form>
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