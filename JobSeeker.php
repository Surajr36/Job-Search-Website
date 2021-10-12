<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />

    <title>Job Seeker portal</title>

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
    <script type="text/javascript" src="gen_validation.js"></script>
    <script type="text/javascript">
        var arrFormValidation = [
            [ //Name
                ["minlen=1",
                    "Please Enter Name "
                ]

            ],
            [ //Address
                ["minlen=1",
                    "Please Enter Address "
                ]

            ],
            [ //Country

            ],
            [ //State
            ],
            [ //City
            ],
            [ //Mobile

                ["num",
                    "Please Enter valid Mobile "
                ],
                ["minlen=10",
                    "Please Enter valid Mobile "
                ]



            ],
            [ //Email
                ["minlen=1",
                    "Please Enter Email "
                ],
                ["email",
                    "Please Enter valid email "
                ]

            ],
            [ //ID


            ],
            [ //TDType

                ["minlen=1",
                    "Please Select File "
                ]

            ],
            [ //UserName

                ["minlen=1",
                    "Please Enter UserName "
                ]
            ],
            [ //Password

                ["minlen=1",
                    "Please Enter Password "
                ]

            ],
            [ //Confirm

                ["minlen=1",
                    "Please Enter Confirm Password "
                ]

            ]
        ];
    </script>
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
                        <h2><span><a href="#">Our Job Seekers</a></span></h2>


                        <p>
                        <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699">
                            <tr>
                                <th height="32" bgcolor="#006699" class="style3">
                                    <div align="left" class="style9 style5 style2"><strong>Company Name</strong></div>
                                </th>
                                <th bgcolor="#006699" class="style3">
                                    <div align="left" class="style9 style5 style2"><strong>Contact Person</strong></div>
                                </th>
                                <th bgcolor="#006699" class="style3">
                                    <div align="left" class="style9 style5 style2"><strong>Email</strong></div>
                                </th>
                            </tr>
                            <?php
                            // Establish Connection with Database
                            $con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");
                            // Select Database
                            //mysqli_select_db("job", $con);
                            // Specify the query to execute
                            $sql = "select * from jobseeker_reg where Status='Confirm'";
                            // Execute query

                            $result = mysqli_query($con, $sql);

                            //var_dump($result);

                            // Loop through each records
                            while ($row = mysqli_fetch_array($result)) {
                                $Name = $row['JobSeekerName'];
                                $City = $row['City'];
                                $Email = $row['Email'];

                            ?>
                                <tr>
                                    <td class="style3">
                                        <div align="left" class="style9 style5"><strong><?php echo $Name; ?></strong></div>
                                    </td>
                                    <td class="style3">
                                        <div align="left" class="style9 style5"><strong><?php echo $City; ?></strong></div>
                                    </td>
                                    <td class="style3">
                                        <div align="left" class="style9 style5"><strong><?php echo $Email; ?></strong></div>
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

                        <div align="center"><a href="JobSeekerReg.php"><strong>New Job Seeker? Register Here</strong></a> </div>
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