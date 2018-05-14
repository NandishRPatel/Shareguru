<?php
session_start();
$u=$_POST["Userid"];
$p=$_POST["Pwdlogin"];
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$m=mysqli_select_db($c,"id2444408_nandish");
$q="select * from user where User_id='".$u."' and Password='".$p."'";
$r=mysqli_query($c,$q);
if(mysqli_num_rows($r)>0)
{
	$_SESSION["uid"]="$u";
	header("location:Homepageu.php");
}
else
{
	
	header("location:index.php? erroruser");
}

?>