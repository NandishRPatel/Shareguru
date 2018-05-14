<?php
$b=$_POST["atitle"];
$a=$_POST["article"];
$v=$_POST["bid"];
//echo $v;
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$z=mysqli_select_db($c,"id2444408_nandish");
$m="select * from broker where User_id='".$v."'";
$aa=mysqli_query($c,$m);
while($re=mysqli_fetch_assoc($aa)){

$p=$re['First_name']." ".$re['Last_name'];


}
$q="insert into article values('','".$p."','".$b."','".$a."')";
mysqli_query($c,$q);
header("location:Homepageb.php");
?>