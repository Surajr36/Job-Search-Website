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

  <title>Education - JOB PORTAL</title>

  <link rel="index" href="./" title="Home" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
  <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
  <style type="text/css">
    .style1 {
      color: #000066;
      font-weight: bold;
    }

    .style2 {
      font-weight: bold
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
            <h2><span><a href="#">Education Qualification </a></span></h2>


            <table width="100%" border="1" cellspacing="2" cellpadding="2">
              <tr>
                <td bgcolor="#A0B9F3"><strong>Create Educational Profile</strong></td>
              </tr>
              <tr>
                <td>
                  <form id="form1" method="post" action="InsertEdu.php">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><strong>Degree:</strong></td>
                        <td>
                          <input type="text" name="cmbQual" id="cmbQual">

                        </td>
                      </tr>
                      <tr>
                        <td><strong>Other Degree:</strong></td>
                        <td><label>
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                      </tr>
                      <tr>
                        <td><strong>University/Board Name:</strong></td>
                        <td>
                          <label>
                            <input type="text" name="txtBoard" id="txtBoard" />
                          </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>Passing Year:</strong></td>
                        <td><label>
                            <select name="cmbYear" id="cmbYear">
                              <option>1993</option>
                              <option>1994</option>
                              <option>1995</option>
                              <option>1996</option>
                              <option>1997</option>
                              <option>1998</option>
                              <option>1999</option>
                              <option>2000</option>
                              <option>2001</option>
                              <option>2002</option>
                              <option>2003</option>
                              <option>2004</option>
                              <option>2005</option>
                              <option>2006</option>
                              <option>2007</option>
                              <option>2008</option>
                              <option>2009</option>
                              <option>2010</option>
                              <option>2011</option>
                              <option>2012</option>
                              <option>2013</option>
                              <option>2014</option>
                              <option>2015</option>
                              <option>2016</option>
                              <option>2017</option>
                              <option>2018</option>
                              <option>2019</option>
                              <option>2020</option>
                              <option>2021</option>
                            </select>
                          </label></td>
                      </tr>
                      <tr>
                        <td><strong>Percentage(%)</strong></td>
                        <td>
                          <label>
                            <input type="text" name="txtPer" id="txtPer" />
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
                </td>
              </tr>
              <tr>
                <td bgcolor="#A0B9F3"><strong>Educational Profile</strong></td>
              </tr>
              <tr>
                <td>
                  <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699">
                    <tr>
                      <th height="32" bgcolor="#006699" class="style3">
                        <div align="left" class="style9 style5 style2"><strong>Degree</strong></div>
                      </th>
                      <th bgcolor="#006699" class="style3">
                        <div align="left" class="style9 style5 style2"><strong>University</strong></div>
                      </th>
                      <th bgcolor="#006699" class="style3">
                        <div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div>
                      </th>
                      <th bgcolor="#006699" class="style3">
                        <div align="left" class="style9 style5 style2"><strong>Percentage</strong></div>
                      </th>
                    </tr>
                    <?php
                    $ID = $_SESSION['ID'];
                    // Establish Connection with Database
                    $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");

                    // Specify the query to execute
                    $sql = "select * from jobseeker_education where JobSeekId='" . $ID . "'";
                    // Execute query
                    $result = mysqli_query($con, $sql);
                    // Loop through each records 
                    while ($row = mysqli_fetch_array($result)) {
                      $Degree = $row['Degree'];
                      $Univ = $row['University'];
                      $Passing = $row['PassingYear'];
                      $Per = $row['Percentage'];
                    ?>
                      <tr>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><?php echo $Degree; ?></strong></div>
                        </td>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><?php echo $Univ; ?></strong></div>
                        </td>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><?php echo $Passing; ?></strong></div>
                        </td>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><?php echo $Per; ?></strong></div>
                        </td>
                      </tr>
                    <?php
                    }
                    // Retrieve Number of records returned
                    $records = mysqli_num_rows($result);
                    ?>
                    <tr>
                      <td colspan="4" class="style3">
                        <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                      </td>
                    </tr>
                    <?php
                    // Close the connection
                    mysqli_close($con);
                    ?>
                  </table>
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