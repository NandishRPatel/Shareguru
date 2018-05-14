<?php
session_start();
if(isset($_SESSION["uid"])){
header("location:Homepageu.php");
}
else if(isset($_SESSION["bid"])){
header("location:Homepageb.php");
}
 ?>
<!DOCTYPE html>
<head>
<title>ShareGuRu-GuRu Of Stock Market</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="signuptest.js"></script>
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
			<li class="current_page_item"><a href="#"><span>Homepage</span></a></li>
			<li ><a href="ViewMarketh.php"><span>View Market</span></a></li>
			<li ><a href="BuySellSharesh.php"><span>Buy/Sell Shares</span></a></li>
			<li><a href="GetBrokerh.php"><span>Get A Broker</span></a></li>
			<li ><a href="Articleh.php"><span>Article</span></a></li>
			<li><a href="AboutUsh.php"><span>About Us</span></a></li>
			</ul>
		</div>
	<!-- end #menu -->
	<div id="img"><img src="images/img1.gif" width="980" height="300" alt="SHAREGURU LTD." /></div>
	<div id="page">
		<div id="content">
			<div class="contentbg">
				<div class="post">
					<h2 class="title"><a href="Articleh.php">Welcome To ShareGuRu</a></h2>
					<!--p class="meta">Posted by <a href="AboutUsh.php">Nandish Patel</a> on July 16, 2016
						&nbsp;&bull;&nbsp;<a href="Articleh.php" class="permalink">Full article</a></p-->
					<div class="entry">
						<p><a href="index.php">ShareGuRu-GuRu Of Stock Market</a> is a Best Among All Stock Trading Sites.Through this one can deal with <strong>Stock Market</strong> and be updated whatever happening to market with the help of this site. Till now users of our site loved this site. With the help of this site user can keep watch on market and he/she can deal with losses. One can get a <strong>Broker</strong> and moreover he/she can buy and sell shares on time. Here there are one more functionality of <strong>Articles</strong> by expert people, with the help of experienced experts with the help of their knowlegde you can master <strong>Stock Market</strong>. You can also pay with credit/debit cards.</p>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="Articleh.php">As a beginner, set up a cash account, not a margin account</a></h2>
					<!--p class="meta">Posted by <a href="AboutUsh.php">Nidhi Malaviya</a> on July 26, 2016
						&nbsp;&bull;&nbsp; <a href="Articleh.php" class="permalink">Full article</a></p-->
					<div class="entry">
						<p>It only takes $500 to $1,000 to get started. Experience is a great teacher. Avoid more volatile types of investments, such as futures, options, and foreign stocks.Concentrate on a few, high-quality stocks. There's no need to own twenty or more stocks.Don't get emotionally involved with your stocks. Follow a set of buying and selling rules, and don't let your emotions change your mind. Don't buy a stock under $15 a share. The best companies that are leaders in their fields simply do not come at $5 or $10 per share.Learning from the best stock market winners can guide you to tomorrow's leaders.</p>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="Articleh.php">Replace the old adage "Buy Low and Sell High" with "Buy High and Sell a lot Higher"</a></h2>
					<!--p class="meta">Posted by <a href="AboutUsh.php">Nandish Patel</a> on July 27, 2016
					&nbsp;&bull;&nbsp; <a href="Articleh.php" class="permalink">Full article</a></p-->
					<div class="entry">
						<p>You want to buy a stock at its pivot point. Don't chase a stock up more than 5% past its pivot.Chart price and volume action frequently can help you recognize when a stock has reached its top and should be sold.History always repeats itself in the stock market.Most big stock market leaders breaking out of a sound base will go up 20% in eight weeks or less from the pivot point. Never sell a stock that does this in four weeks or less, you may have a big winner. Tracking the general market is key because most stocks follow the trend of the general market. A typical bear market will decline 20% to 25% from its peak price.</p>
					</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
		<div id="sidebar-bg">
			<div id="sidebar">
					<form action="checkforuserdb.php" name="loginpage" method="post" >
					 <table width="270" height="132">
                        <tr>
                          <h2>User Login</h2>
                        </tr>
                        <tr>
                          <td style="color: #3FA449"><b>USER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                          <td><input type="text" id="Userid" name="Userid" maxlength="18" required/>
                          </td>
                        </tr>
                        <tr>
                          <td style="color: #3FA449"><b>PASSWORD&nbsp;:</b></td>
                          <td><input type="password" id="Pwdlogin" name="Pwdlogin" maxlength="15" required />
                          </td>
                        </tr>
						
                        <tr></tr>
					    <tr><?php
						if(isset($_GET["erroruser"]))
							{
								echo"<td colspan='7'>"."<b style="."color:red".">"."Invalid UserId Or PassWord"."</b>"."</td>";
							}
							?></tr>
						
                        <tr>
                          <td></td>
                          <td colspan="5" align="right"><input type="submit" name="login" value="Login!" />
                          </td>
                        </tr>
                        <tr>
                          <td colspan="6" style="color: #3FA449"><b>NEW USER CLICK HERE</b><a href="SignUp.php"><b> <u>SIGNUP</u></b></a>	 						 </td>
                        </tr>
                      </table>
			</form>
                            <br><br>
		<form name="blogin" action="checkforbrokerdb.php" method="post">
		  <table width="270" height="132">
                        <tr>
                          <h2>Broker Login</h2>
                        </tr>
                        <tr>
                          <td style="color: #3FA449"><b>BROKER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                          <td><input type="text" id="Brokerid" name="Brokerid" maxlength="18" required/>
                          </td>
                        </tr>
                        <tr>
                          <td style="color: #3FA449"><b>PASSWORD&nbsp;:</b></td>
                          <td><input type="password" id="Pwdblogin" name="Pwdblogin" maxlength="15" required />
                          </td>
                        </tr>
                        <tr></tr><tr>
						<?php
						if(isset($_GET["errorbroker"]))
							{
									echo"<td colspan='7'>"."<b style="."color:red".">"."Invalid BrokerId Or PassWord"."</b>"."</td>";
							}
							?></tr>
					    <tr></tr>
                        <tr>
                          <td></td>
                          <td colspan="5" align="right"><input type="submit" name="login" value="Login!" />
                          </td>
                        </tr>
                        <tr>
                          <td colspan="6" style="color: #3FA449"><b>NEW BROKER CLICK HERE</b><a href="SignUpb.php"><b> <u>SIGNUP</u></b></a>	 						 </td>
                        </tr>
                      </table>
			</form>
			
			</div>
		</div>
		</div>
		<!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsh.php" rel="nofollow">ShareGuRu ltd</a>. Photos by <!--articles--><a href="AboutUsh.php">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>