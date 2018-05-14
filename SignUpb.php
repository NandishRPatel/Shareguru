<!DOCTYPE html>
<head>
	<script type="text/javascript" src="signuptest.js">		
		</script>
<title>SignUpBroker</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body onLoad="changeb();">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1>ShareGuRu</h1><BR/>
				<p>GuRu Of Stock Market</p>
			</div>
		</div>
	</div>
	<div id="menu-wrapper">
		<ul id="menu">
			<li><a href="index.php"><span>Homepage</span></a></li>
			<li ><a href="ViewMarket.php"><span>View Market</span></a></li>
			<li ><a href="BuySellShares.php"><span>Buy/Sell Shares</span></a></li>
			<li><a href="GetBroker.php"><span>Get A Broker</span></a></li>
			<li ><a href="Article.php"><span>Article</span></a></li>
			<li><a href="AboutUs.php"><span>About Us</span></a></li>
	</ul>
	</div>		
	<div id="img"><img src="images/hand.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div>
	<div id="signupbg">
	<br><h2 align="center" style="color:#3A3A3A;"><u>BROKER REGISTRATION FORM</u></h1><br>

<form action="brokerdb.php" name="bsignup" method="post">
<table align="center">
<tr>
<?php
						if(isset($_GET["errorcontentsameb"]))
							{
									echo"<td colspan='7' align=center>"."<b style="."color:#3a3a3a".">"."Choose Different User name Or Email Or Mobile no"."</b>"."</td>";
							}
							?>
</tr>

<tr>
	<td>First Name:</td>
	<td><input type="text" name="bfirstname" id="bfirstname"  ></td>
</tr>
<tr>
	<td>Last Name:</td>
	<td><input type="text"  id="blastname" name="blastname" ></td>
</tr>
<tr>
	<td>Phone no:</td>
	<td><input type="text" id="bphoneno" name="bphoneno" maxlength="10"  ></td>
</tr>
<tr>
	<td>Email Id:</td>
	<td><input type="email"  id="bemail" name="bemail" ></td>
</tr>
<tr>
	<td>User Name:</td>
	<td><input type="text" maxlength="18"  id="bname" name="bname" maxlength="10"  ></td>
</tr>

<tr>
	<td>Password:</td>
	<td><input type="password"  id="bpwd" maxlength="15" name="bpwd" ></td>
</tr>
<tr>
	<td>Confirm Password:</td>
	<td><input type="password"  id="bcpwd" maxlength="15" ></td>
</tr>
<tr>
	<td>Birthdate:</td>
	<td><select name="date">	
			<option value="">Day
                        </option>
                        <option value="1" selected="selected">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
			<option value="">Month
                        </option>
                        <option value="1" selected="selected">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
			<select name="year">
			<option value="">Year
                        </option>
                        <option value="1967" selected="selected">1967
                        </option>
                        <option value="1968">1968
                        </option>
                        <option value="1969">1969
                        </option>
                        <option value="1970">1970
                        </option>
                        <option value="1971">1971
                        </option>
                        <option value="1972">1972
                        </option>
                        <option value="1973">1973
                        </option>
                        <option value="1974">1974
                        </option>
                        <option value="1975">1975
                        </option>
                        <option value="1976">1976
                        </option>
                        <option value="1977">1977
                        </option>
                        <option value="1978">1978
                        </option>
                        <option value="1979">1979
                        </option>
                        <option value="1980">1980
                        </option>
                        <option value="1981">1981
                        </option>
                        <option value="1982">1982
                        </option>
                        <option value="1983">1983
                        </option>
                        <option value="1984">1984
                        </option>
                        <option value="1985">1985
                        </option>
                        <option value="1986">1986
                        </option>
                        <option value="1987">1987
                        </option>
                        <option value="1988">1988
                        </option>
                        <option value="1989">1989
                        </option>
                        <option value="1990">1990
                        </option>
                        <option value="1991">1991
                        </option>
                        <option value="1992">1992
                        </option>
                        <option value="1993">1993
                        </option>
                        <option value="1994">1994
                        </option>
                        <option value="1995">1995
                        </option>
                        <option value="1996">1996
                        </option>
                        <option value="1997">1997
                        </option>
                    </select></td>
</tr>
<tr>
	<td>Company Name:</td>
	<td><input type="text"  id="compname" name="compname" ></td>
</tr>
<tr>
	<td>Company Address:</td>
	<td><textarea id="address" name="address" rows="10" cols="50" placeholder="Only city name">
	    </textarea></td>
</tr>
<tr>
	<td>Sex:</td>
	<td><input type="radio"  id="bgender" name="bgender" value="Male" checked> Male<br>
            <input type="radio"  id="bgender" name="bgender" value="Female"> Female<br>
            <input type="radio"  id="bgender" name="bgender" value="Other"> Other</td>
</tr>
 <!--tr><td><input type="checkbox" value=""/>
                    <label>I accept the <a href="#">Terms and Conditions</a></label></td></tr-->
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
	<td></td>
	<td colspan="1"><input type="button" class="button" value="Register!" onClick="testb();"><input type="button" class="button" value="Reset" onClick="document.bsignup.reset();"></td>
	
</tr>
</table>    
</form>
</div>
<br>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsh.php" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="AboutUsh.php">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>