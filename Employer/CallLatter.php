<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />

    <title>Call Latter - JOB PORTAL</title>

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

                        <?php
                        $JobId = $_GET['JobId'];
                        $JobSeekId = $_GET['JobSeekId'];
                        $AppId = $_GET['AppId'];
                        $Status = "Call Latter Send";
                        $Description = $_POST['txtDesc'];
                        // Establish Connection with MYSQL
                        $con = mysqli_connect("localhost", "swethaa", "swethaapwd", "job");
                        // Select Database
                        //mysql_select_db("job", $con);
                        // Specify the query to Update Record
                        $sql = "Update application_master set Status='" . $Status . "' ,Description='" . $Description . "' where ApplicationId=" . $AppId . " and JobId='" . $JobId . "' and JobSeekId='" . $JobSeekId . "'";
                        // Execute query
                        mysqli_query($con, $sql);
                        // Close The Connection
                        mysqli_close($con);
                        echo '<script type="text/javascript">alert("Call Latter Send Succesfully");window.location=\'Application.php\';</script>';
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