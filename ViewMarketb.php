<?php
session_start();
if(!isset($_SESSION["bid"])){
header("location:index.php");
}
 ?>
<!DOCTYPE html>
<head><script type="text/javascript" src="signuptest.js">		
		</script>

<title>viewmarket</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body onLoad="star();">
<div id="header-wrapper"><a href="logout.php" onClick="return confirm('Do You Really Want To LogOut??');" rel="nofollow"><input type="button" class="button1" value="LogOut"></a>	
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
			<li ><a href="Homepageb.php"><span>Homepage</span></a></li>
			<li class="current_page_item"><a href="#"><span>View Market</span></a></li>
			<li ><a href="BuySellSharesb.php"><span>Buy/Sell Shares</span></a></li>
			<li ><a href="GetBrokerb.php"><span>Other Brokers</span></a></li>
			<li><a href="Articleb.php"><span>Article</span></a></li>
			<li ><a href="AboutUsb.php"><span>About Us</span></a></li>
				
			</ul>
		</div>
		</div>
		<div id="img"><img src="images/viewmarket.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div>
		<fieldset style="border-style:solid; width:980px; margin: 30px auto 0px auto; border-color:#3FA449; border-width:thick;">
		<legend style="color:#3A3A3A";><h3 style="color:#3A3A3A";><b>Live</b></h3></legend>
		<div>
		
		<img width="400" height="85" id="xxx" src="view/0.png">
		</div>
		
		
		</fieldset>
		<br><br>
		
		
		
		<table style="background-color:FFFFFF" cellspacing="3" align="center" width="1020" border="10" bordercolor="#3A3A3A" name="shares" align="center">
		<tr>
		<td  width="146" align="center"  >
		<p align="center" style="font-size:14px">AHMEDABAD BANK</p>
		  <p align="center" style="font-size:16px">155.23</p> 
		  <p align="center" style="font-size:18px"> <img height="16" src="images/arrow.gif">+0.0% </p></td>
		<td width="146"     align="center" >
		<p align="center">BAJAJ AUTO</p>
		  <p align="center"style="font-size:16px" >120.89</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146"    align="center"   >
		<p align="center">ABCD</p>
		  <p align="center" style="font-size:16px">121.23</p>
		  <p align="center"style="font-size:18px"><img height="16" src="images/arrow.gif">+1.23%</p></td>
		<td width="146" align="center"     >
		<p align="center">XYZW</p>
		  <p align="center" style="font-size:16px">123.12</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-3.4%</p></td>
		<td align="center"width="146">
		<p align="center">HELLO</p>
		  <p align="center" style="font-size:16px">123.1</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+2.98</p></td>
		<td align="center" width="146"     >
		  <p align="center">BYE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		  <p align="center" style="font-size:18px"> <img height="16" src="images/arrowdwn.gif">-3.1%</p></td>
		<td align="center" width="146"   >
		  <p align="center">PEEE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+3.2%</p></td>
		</tr>
		<tr>
		<td width="146"     align="center">
		<p align="center">AHMEDABAD BANK</p>
		  <p align="center" style="font-size:16px">155.23</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+1.22% </p></td>
		<td width="146"     align="center">
		<p align="center">BAJAJ AUTO</p>
		  <p align="center" style="font-size:16px">120.89</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146"    align="center" >
		<p align="center">ABCD</p>
		  <p align="center" style="font-size:16px">121.23</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+1.23%</p></td>
		<td width="146" align="center"     >
		<p align="center">XYZW</p>
		  <p align="center" style="font-size:16px">123.12</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+3.4%</p></td>
		<td align="center"width="146"     >
		<p align="center">HELLO</p>
		  <p align="center" style="font-size:16px">123.1</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.98</p></td>
		<td align="center" width="146"     >
		  <p align="center">BYE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-3.1%</p></td>
		<td align="center" width="146"  >
		  <p align="center">PEEE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+3.2%</p></td>
		</tr>
		<tr>
		<td width="146"     align="center">
		<p align="center">AHMEDABAD BANK</p>
		  <p align="center" style="font-size:16px">155.23</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrow.gif">+1.22% </p></td>
		<td width="146"     align="center">
		<p align="center">BAJAJ AUTO</p>
		  <p align="center" style="font-size:16px">120.89</p>
		  <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146"    align="center" >
		<p align="center">ABCD</p>
		  <p align="center" style="font-size:16px">121.23</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146" align="center"     >
		<p align="center">XYZW</p>
		  <p align="center" style="font-size:16px">123.12</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td align="center"width="146"     >
		<p align="center">HELLO</p>
		  <p align="center" style="font-size:16px">123.1</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td align="center" width="146"     >
		  <p align="center">BYE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td align="center" width="146"  >
		  <p align="center">PEEE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		</tr>
		<tr>
		<td width="146"     align="center">
		<p align="center">AHMEDABAD BANK</p>
		  <p align="center" style="font-size:16px">155.23</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146"    align="center">
		<p align="center">BAJAJ AUTO</p>
		  <p align="center" style="font-size:16px">120.89</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146"    align="center" >
		<p align="center">ABCD</p>
		  <p align="center" style="font-size:16px">121.23</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td width="146" align="center"     >
		<p align="center">XYZW</p>
		  <p align="center" style="font-size:16px">123.12</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td align="center"width="146"     >
		<p align="center">HELLO</p>
		  <p align="center" style="font-size:16px">123.1</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td align="center" width="146"     >
		  <p align="center">BYE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		<td align="center" width="146"  >
		  <p align="center">PEEE</p>
		  <p align="center" style="font-size:16px">121.09</p>
		   <p align="center" style="font-size:18px"><img height="16" src="images/arrowdwn.gif">-0.43% </p></td>
		</tr>
		</table>
		<br><br>
		</div>

		</div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsb.php" rel="nofollow">ShareGuRu ltd</a>. Photos by <!--articles--><a href="AboutUsb.php">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
