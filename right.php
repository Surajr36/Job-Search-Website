        <!-- Right column -->
        <div id="col" class="noprint">
          <div id="col-in">
            <!-- Category -->
            <h3>Login</h3>
            <div class="login">
              <form name="form1" method="post" action="login.php">
                <table width="100%" border="0">
                  <tr>
                    <td><strong>User Name</strong></td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        <input type="text" name="txtUser" id="txtUser" />
                      </label>
                      <span class="textfieldRequiredMsg"></span>
                      <label></label>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Password</strong></td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        <input type="password" name="txtPass" id="txtPass" />
                      </label>
                      <span class="textfieldRequiredMsg"></span>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>User Type</strong></td>
                  </tr>
                  <tr>
                    <td><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">Job Seeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <!-- <option value="Administrator">Administrator</option> -->
                        </select>
                      </label></td>
                  </tr>
                  <tr>
                    <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                        </div>
                      </label></td>
                  </tr>
                  <tr>
                    <td>
                      <div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <br />
          </div> <!-- /col-in -->
        </div> <!-- /col -->