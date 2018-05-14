<?php
session_start();
if(!isset($_SESSION["bid"])){
header("location:index.php");
}
 ?><!DOCTYPE html>
<head>
<title>ShareGuRu-GuRu Of Stock Market</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="signuptest.js"></script>
</head>
<body>
	<div id="header-wrapper">
   <a href="logout.php" rel="nofollow" onClick="return confirm('Do You Really Want To LogOut??');"> <input type="button" class="button1" value="LogOut"></a>
		<div id="header">
			<div id="logo">
				<h1>ShareGuRu</h1><BR/>
				<p>GuRu Of Stock Market</p>
			</div>
		</div><?php
	echo "<p align=right style="."font-size:18px;".">"."<b style="."color:#3FA449".">"."Logged In As-".$_SESSION["bid"]."<u>"."</u>"."</b>"."</P>";
	 ?>
	</div>
	<div id="menu-wrapper">
		<ul id="menu">
			<li class="current_page_item"><a href="#"><span>Homepage</span></a></li>
			<li ><a href="ViewMarketb.php"><span>View Market</span></a></li>
			<li ><a href="BuySellSharesb.php"><span>Buy/Sell Shares</span></a></li>
			<li><a href="GetBrokerb.php"><span>Other Brokers</span></a></li>
			<li ><a href="Articleb.php"><span>Article</span></a></li>
			<li><a href="AboutUsb.php"><span>About Us</span></a></li>
			</ul>
		</div>
	<!-- end #menu -->
	<div id="img"><img src="images/img1.gif" width="980" height="300" alt="SHAREGURU LTD." /></div>
	<div id="page">
		<div id="content">
			<div class="contentbg">
				<div class="post">
					<h2 class="title"><a href="Articleb.php">Welcome To ShareGuRu</a></h2>
					<!--p class="meta">Posted by <a href="AboutUsb.php">Nandish Patel</a><about us link> on July 16, 2016
						&nbsp;&bull;&nbsp;<a href="Articleb.php" class="permalink">Full article</a></p--><!--Articles-->
					<div class="entry">
						<p><a href="Homepageb.php">ShareGuRu-GuRu Of Stock Market</a> is a Best Among All Stock Trading Sites.Through this one can deal with <strong>Stock Market</strong> and be updated whatever happening to market with the help of this site. Till now users of our site loved this site. With the help of this site user can keep watch on market and he/she can deal with losses. One can get a <strong>Broker</strong> and moreover he/she can buy and sell shares on time. Here there are one more functionality of <strong>Articles</strong> by expert people, with the help of experienced experts with the help of their knowlegde you can master <strong>Stock Market</strong>. You can also pay with credit/debit cards.</p>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="Articleb.php">As a beginner, set up a cash account, not a margin account</a></h2>
					<!--p class="meta">Posted by <a href="AboutUsb.php">Nidhi Malaviya</a> on July 26, 2016
						&nbsp;&bull;&nbsp; <a href="Articleb.php" class="permalink">Full article</a></p-->
					<div class="entry">
						<p>It only takes $500 to $1,000 to get started. Experience is a great teacher. Avoid more volatile types of investments, such as futures, options, and foreign stocks.Concentrate on a few, high-quality stocks. There's no need to own twenty or more stocks.Don't get emotionally involved with your stocks. Follow a set of buying and selling rules, and don't let your emotions change your mind. Don't buy a stock under $15 a share. The best companies that are leaders in their fields simply do not come at $5 or $10 per share.Learning from the best stock market winners can guide you to tomorrow's leaders.</p>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="Articleb.php">Replace the old adage "Buy Low and Sell High" with "Buy High and Sell a lot Higher"</a></h2>
					<!--p class="meta">Posted by <a href="AboutUsb.php">Nandish Patel</a> on July 27, 2016
					&nbsp;&bull;&nbsp; <a href="Articleb.php" class="permalink">Full article</a></p-->
					<div class="entry">
						<p>You want to buy a stock at its pivot point. Don't chase a stock up more than 5% past its pivot.Chart price and volume action frequently can help you recognize when a stock has reached its top and should be sold.History always repeats itself in the stock market.Most big stock market leaders breaking out of a sound base will go up 20% in eight weeks or less from the pivot point. Never sell a stock that does this in four weeks or less, you may have a big winner. Tracking the general market is key because most stocks follow the trend of the general market. A typical bear market will decline 20% to 25% from its peak price.</p>
					</div>
				</div><br>
				<div>
		<fieldset style="border-style:solid;  border-color:#3FA449; border-width:thick; width:300px; float:inherit;">
		<legend style="color:#3A3A3A";><h3 style="color:#3A3A3A";><b>Comments</b></h3></legend><br>
		<form name="brokerarticle" action="articledb.php" method="post">
		<table>
		<tr><td><input type="text" name="atitle" placeholder="Article Tittle" required></td>
				<div style="height:70px;"></div>
	<tr><td><textarea name="article" id="article" placeholder="Comments.." rows="7" required cols="75" required ></textarea></td></tr>

	<tr><td><input type="hidden" name="bid" value="<?php echo $_SESSION["bid"] ?>"></td></tr>
	
		<tr><td><input type="submit"  class="button1" value="Post" ></td></tr></table></form>
		</fieldset></div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
		<div id="sidebar-bg">
			<div id="sidebar">
				<p style="color: #3A3A3A; font-size: 4em">some content will be shown here soon
                            </p>	
			
			</div>
		</div>
		</div>
		<div style="clear: both;">&nbsp;</div>
		
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsb.php" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="AboutUsb.php">NN group</a>.</p>
</div>
</body>
</html>