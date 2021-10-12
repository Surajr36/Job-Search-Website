<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>News - JOB PORTAL</title>

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
            <h2><span><a href="#">Latest News</a></span></h2>
            <p>
            <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699">
              <tr>
                <th bgcolor="#006699" class="style3">&nbsp;</th>
                <th height="32" bgcolor="#006699" class="style3">
                  <div align="left" class="style9 style5 style2"><strong>News</strong></div>
                </th>
                <th bgcolor="#006699" class="style3">
                  <div align="left" class="style9 style5 style2"><strong>News Date</strong></div>
                </th>
              </tr>
              <?php
              // Establish Connection with Database
              $con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");
              // Select Database

              // Specify the query to execute
              $sql = "select * from news_master";
              // Execute query
              $result = mysqli_query($con, $sql);
              // Loop through each records 
              while ($row = mysqli_fetch_array($result)) {
                $News = $row['News'];
                $NewsDate = $row['NewsDate'];

              ?>
                <tr>
                  <td class="style3"><img src="design/ico_archive2.gif" alt="" width="9" height="11" /></td>
                  <td class="style3">
                    <div align="left" class="style9 style5"><strong><?php echo $News; ?></strong></div>
                  </td>
                  <td class="style3">
                    <div align="left" class="style9 style5"><strong><?php echo $NewsDate; ?></strong></div>
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
            </p>
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