<?php
session_start();
$u=$_POST["Brokerid"];
$p=$_POST["Pwdblogin"];
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$m=mysqli_select_db($c,"id2444408_nandish");
$q="select * from broker where User_id='".$u."' and Password='".$p."'";
$r=mysqli_query($c,$q);
if(mysqli_num_rows($r)>0)
{
	$_SESSION["bid"]="$u";
	header("location:Homepageb.php");
}
else
{
	
	header("location:index.php? errorbroker");
}

?>