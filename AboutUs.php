<?php
session_start();
if(!isset($_SESSION["uid"])){
header("location:index.php");
}
 ?>
<!DOCTYPE html>
<head>
<title>AboutUs</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body onLoad="document.feedback.reset();">
<div id="header-wrapper">

<a href="logout.php" onClick="return confirm('Do You Really Want To LogOut??');" rel="nofollow"><input type="button" class="button1" value="LogOut"></a>
		<div id="header">
			<div id="logo">
				<h1>ShareGuRu</h1><BR/>
				<p>GuRu Of Stock Market</p>
			</div>
		</div><?php

	echo "<p align=right style="."font-size:18px;".">"."<b style="."color:#3FA449".">"."Logged In As-".$_SESSION["uid"]."<u>"."</u>"."</b>"."</P>";
	 ?>
	</div>
	
	<div id="menu-wrapper">
		<ul id="menu">
			<li ><a href="Homepageu.php"><span>Homepage</span></a></li>
			<li ><a href="ViewMarket.php"><span>View Market</span></a></li>
			<li ><a href="BuySellShares.php"><span>Buy/Sell Shares</span></a></li>
			<li ><a href="GetBroker.php"><span>Get A Broker</span></a></li>
			<li><a href="Article.php"><span>Article</span></a></li>
			<li class="current_page_item"><a href="#"><span>About Us</span></a></li>
				
			</ul>
		</div>
	
		<div id="img"><img src="images/aboutus.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div>
		<BR><BR>
		<BR>
		<p align="center" style="color:#3A3A3A; font-weight:600; font-size:40px;">About Us</p><br>
		<div align="center">
		<div class="outabtus">
		<p class="abtp">NANDISH PATEL</p>
		<p class="abtp">1418BEIT30031</p>
		<p class="abtp">INFORMATION TECHNOLOGY</p>
		<p class="abtp">LDRP-ITR</p>
		</div>	
		</div>
		<div style="height:70px;"></div>
		<div align="center">
		<fieldset style="border-style:solid;  border-color:#3FA449; border-width:thick; width:500px;">
		<legend style="color:#3A3A3A";><h3 style="color:#3A3A3A";><b>FEEDBACK FORM</b></h3></legend><br>
		<form name="feedbackuser" action="feed.php" method="post">
		<table>
		
		<div style="height:80px;"></div>
		<tr><td><input type="hidden" name="feed1" value="<?php echo $_SESSION["uid"] ?>"></td></tr>
	<tr><td><textarea name="feed2"  placeholder="YOUR VALUABLE FEEDBACK.." rows="7" cols="100" required ></textarea></td></tr>
		<tr><td><input type="submit"  class="button1" value="GO!!!" ></td></tr></table></form>
		</fieldset>
	</div>	<div style="height:70px;"></div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="#" rel="nofollow">ShareGuRu ltd</a>. Photos by <!--articles--><a href="#">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
