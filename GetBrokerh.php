<!DOCTYPE html>
<head>
<title>GetBroker</title>
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
			<li  class="current_page_item"><a href="#"><span>Get A Broker</span></a></li>
			<li><a href="Articleh.php"><span>Article</span></a></li>
			<li><a href="AboutUsh.php"><span>About Us</span></a></li>
	  </ul>
</div>
		
		<div id="img"><img src="images/handshake.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div><br><br><br>
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
		if($j==4)
		break;
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
		if($j==4)
		break;
		}		
		
		}
		
?>
		
		
		<div style="height:100px"></div>
		<p class="pee" align="center"><a href="index.php">Login/SignUp</a> For More Details</p><br><br>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsh.php" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="AboutUsh.php">NN group</a>.</p>
</div>
</body>
</html>