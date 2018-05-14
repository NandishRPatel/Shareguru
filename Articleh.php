<!DOCTYPE html>
<head>
<title>Articles</title>
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
			<li><a href="GetBrokerh.php"><span>Get A Broker</span></a></li>
			<li class="current_page_item"><a href="#"><span>Article</span></a></li>
			<li><a href="AboutUsh.php"><span>About Us</span></a></li>
	  </ul>
</div>
		<div id="img"><img src="images\article.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div>
		<div>
		<div id="articlebg">
		<br>
		
		<h2 style="color:#3A3A3A;" align="center"><u>Articles</u></h2><br>
		<?php  
                
				$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
				$m=mysqli_select_db($c,"id2444408_nandish");
				$q="select * from article";
				$r=mysqli_query($c,$q);
 			$i=2;
			$j=1;
			while($re=mysqli_fetch_assoc($r)){
			if($i%2==0){
		echo "<fieldset class="."x".">";
		echo "<legend style="."color:#3A3A3A;".">"."<h3 style="."color:#3A3A3A;".">"."<b>Article".$j."</b></h3></legend>";
		echo "<div class="."post".">";
echo "<h2 class="."title1".">"."<a href="."#".">".$re['Atitle']."</a></h2>";
		echo "<p class="."meta".">"."Posted by <a href="."#".">".$re['abid']."</a></p>";
				echo "<div class="."entry".">";
		echo   "<p Class="."z".">"."<a href="."index.php".">"."</a>".$re['Article']."</p>";
		echo "</div>";
		echo "</div>";
		echo "</fieldset>";
		echo "<br><br>";
		$i++;
		$j++;
		if($j==3)
		break;
		}
		else
		{
		echo "<fieldset class="."x1".">";
		echo "<legend style="."color:#3FA449;".">"."<h3 style="."color:#3FA449;".">"."<b>Article".$j."</b></h3></legend>";
		echo "<div class="."post".">";
		echo "<h2 class="."title1".">"."<a href="."#".">".$re['Atitle']."</a></h2>";
		echo "<p class="."meta".">"."Posted by <a href="."#".">".$re['abid']."</a></p>";
		echo "<div class="."entry".">";
		echo   "<p Class="."z".">"."<a href="."index.php".">"."</a>".$re['Article']."</p>";
		echo "</div>";
		echo "</div>";
		echo "</fieldset>";
		echo "<br><br>";
		$i++;
		$j++;
		if($j==3)
		break;
		}
		}
		?>
		
		<BR>
		
		<BR>
		</div>
		</div>
		
		
		<div style="height:100px"></div>
		<p class="pee" align="center"><a href="index.php">Login/SignUp</a> For More Details</p><br><br>
		<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsh.php" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="AboutUsh.php">NN group</a></p>
</div>
</div>
<!-- end #footer -->
</body>
</html>