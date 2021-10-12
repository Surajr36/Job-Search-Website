<?php
session_start();
if (isset($_SESSION['$UserName'])) {
    header('location:Admin/index.php');
}
if (isset($_SESSION['$UserName_job'])) {
    header('location:JobSeeker/index.php');
}
if (isset($_SESSION['$UserName_emp'])) {
    header('location:Employer/index.php');
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

        .style2 {
            font-size: medium;
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
                        <h2><span><a href="#">Welcome To Job Portal System</a></span></h2>
                        <h3>
                            <marquee>Unified Job Application and recruitement portal</marquee>
                        </h3>

                        <p>
                            <span class="style2">Unemployment</span> is one of the serious social issues faced by both developing and developed countries. One of the reasons for this problem is the unfair distribution or lack of information on job opportunities due to which many people are unable to find out about new job vacancies.
                        </p>
                        <p>
                            The objective of our project is to create a completely functional interface using PHP and MySQL for candidates who are looking for job opportunities in different sectors and make the entire process of applying for jobs easier not only for the candidates but also for the employers who can setup and recruit candidates from the same portal.
                        </p>
                        <p align="right"> <img src="design/banner-4.jpg" alt="" width="100%" height="300" /></p>
                    </div>
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