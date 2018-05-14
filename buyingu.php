<?php
$sn=$_POST["sharename"];
$sc=$_POST["sharecode"];
$qu=$_POST["quantity"];
$u=$_POST["buyer"];
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$z=mysqli_select_db($c,"id2444408_nandish");
$m="select * from share where Share_code='".$sc."' and Share_name='".$sn."'";
$aa=mysqli_query($c,$m);
if(!$aa)
{
header("location:BuySellShares.php ? InvalidDetails");
}
else
{

while($re=mysqli_fetch_assoc($aa)){
$price=$re['Share_price'];
$comp=$re['Share_company'];
}
$total= $price*$qu;
//echo $total;

$q2="insert into order values('','".$u."','".$sn."','".$sn."','".$comp."','".$qu."','".$total."')";
$x123=mysqli_query($c,$q2);
$q5="select * from user where User_id='".$u."'";
$bb=mysqli_query($c,$q5);

while($se=mysqli_fetch_assoc($bb))
{
$emailid=$se['Email'];
$nm=$se['First_name']." ".$se['Last_name'];
}


$msg = "Dear ".$nm.",\nyour order for \nShare Name:  ".$sn."\nComapny Name:  ".$comp." \nQuantity:  ".$qu."\nTotal_price:  ".$total."";
$msg = wordwrap($msg,70);
$mail=mail($emailid,"Thanks for Buying",$msg);

//header("location:BuySellSharesb.php ? OrderDone");

}
?>