<?php
session_start();
if(!isset($_SESSION["bid"])){
header("location:index.php");
}
 ?>
<!DOCTYPE html>
<head>
<title>GetBroker</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
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
			<li ><a href="ViewMarketb.php"><span>View Market</span></a></li>
			<li ><a href="BuySellSharesb.php"><span>Buy/Sell Shares</span></a></li>
			<li  class="current_page_item"><a href="#"><span>Other Brokers</span></a></li>
			<li><a href="Articleb.php"><span>Article</span></a></li>
			<li><a href="AboutUsb.php"><span>About Us</span></a></li>
	  </ul>
</div>
		</div>
		<div id="img"><img src="images/handshake.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div><br><br>
						<h2 style="color:#3A3A3A;" align="center"><u>Brokers</u></h2><br>
	<?php  
                
				$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
				$m=mysqli_select_db($c,"id2444408_nandish");
				$q="select * from broker";
				$r=mysqli_query($c,$q);

		$i=2;
		$j=1;
		
		while($re=mysqli_fetch_assoc($r)){
		if($i%2==0){
echo "<fieldset class="."fldset".">";
echo "<legend style="."color:#3A3A3A;".">"."<h3 style="."color:#3A3A3A;".">"."<b>".$j."</b></h3></legend>";
echo "<p class="."brk".">"."Name : ".$re['First_name']." ".$re['Last_name']."</p>";
echo "<p class="."brk".">"."Company name : ".$re['Company_name']."</p>";
echo "<p class="."brk".">"."Company address : ".$re['Company_address']."</p>";
echo "<p class="."brk".">"."Mobile no : ".$re['Phone_no']."</p>";
echo "</fieldset>";

		$i++;
		$j++;
		}
		else{	
echo "<fieldset class="."fldset1".">";
echo "<legend style="."color:#3FA449;".">"."<h3 style="."color:#3FA449".">"."<b>".$j."</b></h3></legend>";
echo "<p class="."brk1".">"."Name : ".$re['First_name']." ".$re['Last_name']."</p>";
echo "<p class="."brk1".">"."Company name : ".$re['Company_name']."</p>";
echo "<p class="."brk1".">"."Company address : ".$re['Company_address']."</p>";
echo "<p class="."brk1".">"."Mobile no : ".$re['Phone_no']."</p>";
echo "</fieldset>";
	
		$i++;
		$j++;
		}		
		
		}
		
?>
		<div style="height:70px;"></div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsb.php" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="AboutUsb.php">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>