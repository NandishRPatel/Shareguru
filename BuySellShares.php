<?php
session_start();
if(!isset($_SESSION["uid"])){
header("location:index.php");
}
 ?>
<!DOCTYPE html>
<head>
<title>Buy/Sell Shares</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
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
			<li class="current_page_item"><a href="#"><span>Buy/Sell Shares</span></a></li>
			<li ><a href="GetBroker.php"><span>Get A Broker</span></a></li>
			<li><a href="Article.php"><span>Article</span></a></li>
			<li><a href="AboutUs.php"><span>About Us</span></a></li>
			
			</ul>
		</div>
		</div>
		<div id="img"><img src="images/buysell.jpg" width="980" height="300" alt="SHAREGURU LTD." /></div>
		<p align="center" style="color:#3A3A3A; font-weight:600; font-size:40px;">Shares</p><br>
	<fieldset class="fldset">
<legend style="color:#3A3A3A;"><h3 style="color:#3A3A3A;"><b>Buy Shares</b></h3></legend>
<form action="buyingu.php" name="buyshareu" method="post">
<table align="center">
<tr>
	<td style="color:#3A3A3A; font-size:18px;">Share Code:</td>
	
	<td><input type="text" name="sharecode" ></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
	<td style="color:#3A3A3A; font-size:18px;">Share Name:</td>
	
	<td><input type="text" name="sharename"></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
	<td style="color:#3A3A3A; font-size:18px;">Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
	<td><input type="text" name="quantity" ></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
	<td><input type="hidden" name="buyer"  value="<?php echo $_SESSION["uid"] ?>"></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<?php
						if(isset($_GET["OrderDone"]))
							{
									echo"<td colspan='7' align=center>"."<b style="."color:#3a3a3a".">"."YOUR ORDER IS SUCESSFULLY DONE!"."</b>"."</td>";
							}
							else if(isset($_GET["InvalidDetails"])){
							
							echo"<td colspan='7' align=center>"."<b style="."color:#3a3a3a".">"."INVALID DETAILS!"."</b>"."</td>";
							
							}
							else{}
							?>
</tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
	<td></td>
	<td colspan="1"><input type="submit" class="button1" value="BUY!!!"></td>
</tr>
</table>    
</form>
</fieldset>
<fieldset class="fldset1">
<legend style="color:#3FA449;"><h3 style="color:#3FA449;"><b>Your Shares</b></h3></legend>
<?php 
$i=$_SESSION["uid"];
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$z=mysqli_select_db($c,"id2444408_nandish");
$m="select * from id2444408_nandish.order where User_id='".$i."'";
$res = mysqli_query($c,$m);if (!$res) {   die('Invalid query: ' . mysqli_error());}
else{
$i=2;
		$j=1;
		
		while($re=mysqli_fetch_assoc($res)){
		if($i%2==0){
echo "<fieldset class="."fldset".">";
echo "<legend style="."color:#3A3A3A;".">"."<h3 style="."color:#3A3A3A;".">"."<b>".$j."</b></h3></legend>";
echo "<p class="."brk".">"."Share Name : ".$re['Order_name']."</p>";
$_SESSION["sharename"]=$re['Order_name'];
echo "<p class="."brk".">"."Company name : ".$re['Share_company']."</p>";
echo "<p class="."brk".">"."Quantity : ".$re['Quantity']."</p>";
$_SESSION["quantity"]=$re['Quantity'];
$_SESSION["price"]=$re['Total_price'];
echo "<p class="."brk".">"."Total Price : ".$re['Total_price']."<form name=temp method=post action=sellshares.php><input type=submit class=button245 value=SELL!!!"."></form></p>";
echo "</fieldset>";

		$i++;
		$j++;
		}
		else{	
echo "<fieldset class="."fldset1".">";
echo "<legend style="."color:#3FA449;".">"."<h3 style="."color:#3FA449".">"."<b>".$j."</b></h3></legend>";
echo "<p class="."brk1".">"."Share Name : ".$re['Order_name']."</p>";
$_SESSION["sharename"]=$re['Order_name'];
echo "<p class="."brk1".">"."Company name : ".$re['Share_company']."</p>";
echo "<p class="."brk1".">"."Quantity : ".$re['Quantity']."</p>";
$_SESSION["quantity"]=$re['Quantity'];
$_SESSION["price"]=$re['Total_price'];
echo "<p class="."brk1".">"."Total Price : ".$re['Total_price']."<form name=temp method=post action=sellshares.php><input type=submit class=button245 value=SELL!!!"."></form></p>";

echo "</fieldset>";
	
		$i++;
		$j++;
		
		}		
		
		}
}
?>
</fieldset>
<div style="height:70px;"></div>		
<div id="footer">
	<p>2016 All Rights Reserved. Design By <a href="AboutUs.php" rel="nofollow">ShareGuRu ltd</a>. Photos by <!--articles--><a href="AboutUs.php">NN group</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>