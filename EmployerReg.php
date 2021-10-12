<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>Employer Registeration</title>

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
  <script type="text/javascript" src="gen_validation.js"></script>
  <script type="text/javascript">
    var arrFormValidation = [
      [ //Name
        ["minlen=1",
          "Please Enter Company Name"
        ]
      ],
      [ //Contact Person
        ["minlen=1",
          "Please Enter Contact Person"
        ]
      ],
      [ //Address
        ["minlen=1",
          "Please Enter Address"
        ]
      ],
      [ //City
        ["minlen=1",
          "Please Enter City"
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
      [ //Mobile
        ["num",
          "Please Enter valid Mobile "
        ],
        ["minlen=10",
          "Please Enter valid Mobile "
        ]
      ],
      [ //Area
        ["minlen=1",
          "Please Enter Area of Work"
        ]
      ],
      [ //User
        ["minlen=1",
          "Please Enter UserName "
        ]
      ],
      [ //Password
        ["minlen=1",
          "Please Enter Password "
        ]
      ],
      [ //Que
      ],
      [ //Answer
        ["minlen=1",
          "Please Enter Answer "
        ]
      ]
    ];
  </SCRIPT>
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
            <h2><span><a href="#">Employer Registration Form</a></span></h2>
            <div class="login">

              <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Company Name:</td>
                    <td>
                      <label>
                        <input type="text" name="txtName" id="txtName" placeholder="Enter Name" />
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>Contact Person:</td>
                    <td>
                      <label>
                        <input type="text" name="txtPerson" id="txtPerson" placeholder="Enter Contact Person" />
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Address:</td>
                    <td>
                      <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5" placeholder="Enter Address"></textarea>
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>City:</td>
                    <td>
                      <label>
                        <input type="text" name="txtCity" id="txtCity" placeholder="Enter City" />
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td>
                      <label>
                        <input type="text" name="txtEmail" id="txtEmail" placeholder="Enter Email" />
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Mobile:</td>
                    <td>
                      <label>
                        <input type="text" name="txtMobile" id="txtMobile" placeholder="Enter Mobile" />
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Area of Work: </td>
                    <td>
                      <input type="text" name="txtAreaWork" id="txtAreaWork" placeholder="Enter Area of Work" />
                    </td>
                  </tr>
                  <tr>
                    <td>User Name:</td>
                    <td>
                      <label>
                        <input type="text" name="txtUserName" id="txtUserName" placeholder="Enter User Name" />
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Password:</td>
                    <td><label>
                        <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter Password" />
                      </label></td>
                  </tr>
                  <tr>
                    <td>Security Question:</td>
                    <td><select name="cmbQue" id="cmbQue">
                        <option>What is Your Pet Name?</option>
                        <option selected="selected">Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td>Answer:</td>
                    <td>
                      <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" placeholder="Enter Answer." />
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                        </div>
                      </label></td>
                  </tr>
                </table>
              </form>
            </div>
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