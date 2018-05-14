
 <br><br><h2 style="color:#3A3A3A;" align="center"><u>Admin Panel</u></h1><br>
<form action="admincheck.php" name="admin" method="post" >
					 <table align="center" width="270" height="132">
                        <tr>
                          <td style="color: #3FA449"><b>ADMIN_ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                          <td><input type="text" id="Adminid" name="Adminid" maxlength="30" required/>
                          </td>
                        </tr>
                        <tr>
                          <td style="color: #3FA449"><b>PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                          <td><input type="password" id="Pwdadmin" name="Pwdadmin" maxlength="15" required />
                          </td>
                        </tr>
							<tr>
							<td align="center" colspan="7">			
									<?php
									if(isset($_GET["erroradmin"]))
									{
										echo"<b style="."color:red".">"."Baka Na Chale"."</b>";
									}
									?>
							</td>
							</tr>
                        <tr>
                           <td colspan="5" align="right"><input type="submit" name="login" value="Login!" />
                          </td>
                        </tr>
                      </table>
			</form>
