<!DOCTYPE html>
<head>
<title>Buy/Sell Shares</title>
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
			<li class="current_page_item"><a href="#"><span>Buy/Sell Shares</span></a></li>
			<li ><a href="GetBrokerh.php"><span>Get A Broker</span></a></li>
			<li><a href="Articleh.php"><span>Article</span></a></li>
			<li><a href="AboutUsh.php"><span>About Us</span></a></li>
			
			</ul>
		</div>
		</div>
		<div id="img"><img src="images/buysell.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div>
		
		<div>
		<?php
include('class.stockMarketAPI.php');
?>
 
<h1>Current Stock Information for GOOGL</h1>
 
<?php
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'AAPL';
?>
<pre><?php print_r($StockMarketAPI->getData());?></pre>
 
<?php
$start = '6-09-2017';
$end = '6-09-2017';
?>

<?php
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'GOOGL';
$StockMarketAPI->history = array(
  'start'    => $start,
  'end'    => $end,
  'interval' => 'd' // Daily
);
?>		</div>
		
		<div style="height:100px"></div>
		<p class="pee" align="center"><a href="Homepage.php">Login/SignUp</a> For More Details</p><br><br>
		
				<div style="height:100px"></div>
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUsh.php" rel="nofollow">ShareGuRu ltd</a>. Articles by <!--articles--><a href="AboutUsh.php">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>