<!DOCTYPE html>
<head>
<script language="javascript">
function hud(){
	document.feedback.reset();
	alert("You must Login to Give Feedback!")
	window.location.href="index.php"
	
	}
</script>
<title>AboutUs</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
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
			<li ><a href="index.php"><span>Homepage</span></a></li>
			<li ><a href="ViewMarketh.php"><span>View Market</span></a></li>
			<li ><a href="BuySellSharesh.php"><span>Buy/Sell Shares</span></a></li>
			<li ><a href="GetBrokerh.php"><span>Get A Broker</span></a></li>
			<li><a href="Articleh.php"><span>Article</span></a></li>
			<li class="current_page_item"><a href="#"><span>About Us</span></a></li>
				
			</ul>
		</div>
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
		<form name="feedback" action="" method="">
		<table>
		
		<div style="height:80px;"></div>
		<tr><td><input type="hidden" name=""></td></tr>
	<tr><td><textarea name="feedback" id="abc" placeholder="YOUR VALUABLE FEEDBACK.." rows="7" cols="100" required ></textarea></td></tr>
		<tr><td><input type="button"  class="button1" value="GO!!!" onClick="hud();" ></td></tr></table></form>
		</fieldset>
	</div>	<div style="height:70px;"></div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="#" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="#">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
