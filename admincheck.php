<?php
session_start();
$u=$_POST["Adminid"];
$p=$_POST["Pwdadmin"];
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$m=mysqli_select_db($c,"id2444408_nandish");
$q="select * from admin where Id='".$u."' and Password='".$p."'";
$r=mysqli_query($c,$q);
if(mysqli_num_rows($r)>0)
{
	$_SESSION["adminid"]="$u";
	header("location:adminview.php");
	
}
else
{
	
	header("location:Error.php ? erroradmin");
}

?>