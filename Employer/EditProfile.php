<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>Edit Profile: JOB PORTAL</title>

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
            $sql = "select * from employer_reg where EmployerId ='" . $ID . "'  ";
            // Execute query
            $result = mysqli_query($con, $sql);
            // Loop through each records 
            $row = mysqli_fetch_array($result)
            ?>
            <form method="post" action="UpdateProfile.php">
              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                <tr>
                  <td><strong>Company ID:</strong></td>
                  <td>
                    <label>
                      <input name="txtId" type="text" id="txtId" value="<?php echo $row['EmployerId']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Company Name:</strong></td>
                  <td>
                    <label>
                      <input name="txtName" type="text" id="txtName" value="<?php echo $row['CompanyName']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Contact Person:</strong></td>
                  <td>
                    <label>
                      <input name="txtContact" type="text" id="txtContact" value="<?php echo $row['ContactPerson']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Address:</strong></td>
                  <td>
                    <label>
                      <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"><?php echo $row['Address']; ?></textarea>
                    </label>
                    <span class="textareaRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>City:</strong></td>
                  <td>
                    <label>
                      <input name="txtCity" type="text" id="txtCity" value="<?php echo $row['City']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Email:</strong></td>
                  <td>
                    <label>
                      <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $row['Email']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Mobile:</strong></td>
                  <td>
                    <label>
                      <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Mobile']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Area of Work:</strong></td>
                  <td>
                    <label>
                      <input name="txtArea" type="text" id="txtArea" value="<?php echo $row['Area_Work']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>User Name:</strong></td>
                  <td>
                    <label>
                      <input name="txtUser" type="text" id="txtUser" value="<?php echo $row['UserName']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><strong>Password:</strong></td>
                  <td>
                    <label>
                      <input name="txtPassword" type="password" id="txtPassword" value="<?php echo $row['Password']; ?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span>
                  </td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                      <input type="submit" name="button" id="button" value="Submit" />
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