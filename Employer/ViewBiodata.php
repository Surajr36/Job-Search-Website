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

    .style2 {
      font-weight: bold
    }

    .style3 {
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
            <h2><span><a href="#">Welcome To Control Panel</a></span></h2>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#A0B9F3"><strong>Personal Information</strong></td>
              </tr>
              <tr>
                <td>
                  <?php
                  $ID = $_GET['JobSeekId'];
                  // Establish Connection with Database
                  $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");
                  // Select Database
                  //mysqli_select_db("job", $con);
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
                </td>
              </tr>
              <tr>
                <td bgcolor="#A0B9F3"><strong>Educational Qualification</strong></td>
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
                    $ID = $_GET['JobSeekId'];
                    // Establish Connection with Database
                    $con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");
                    // Select Database
                    //mysql_select_db("job", $con);
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

                    <?php
                    // Close the connection
                    mysqli_close($con);
                    ?>
                  </table>
                </td>
              </tr>
            </table>
            <?php
            $Status = $_GET['Status'];
            if ($Status == "Apply") {
            ?>
              <form id="form1" method="post" action="CallLatter.php?JobId=<?php echo $_GET['JobId']; ?>&JobSeekId=<?php echo $_GET['JobSeekId']; ?>&AppId=<?php echo $_GET['AppId']; ?>">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><strong>Call Latter Description:</strong></td>
                    <td>
                      <label>
                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                      </label>
                      <span class="textareaRequiredMsg">A value is required.</span></span>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </form>
            <?php
            }
            ?>
            <p align="center"><a href="Application.php"><strong>Back</strong></a></p>

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