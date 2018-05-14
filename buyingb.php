<?php
$sc=$_POST["sharecode"];
$sn=$_POST["sharename"];
$qu=$_POST["quantity"];
$u=$_POST["buyer"];
$c=mysqli_connect("sharegurucom.000webhostapp.com","id2444408_nandish","id2444408_nandish");
$z=mysqli_select_db("id2444408_nandish",$c);
$m="select * from id2444408_nandish.share where share.Share_code='".$sc."' and share.Share_name='".$sn."'";
$aa=mysqli_query($m);
echo $aa."<br>";
//echo $sn,$sc,$qu,$u ;
if(!$aa)
{
//header("location:BuySellSharesb.php ? InvalidDetails");
}
else{

while($re=mysqli_fetch_assoc($aa)){

$price=$re['Share_price'];
$company=$re['Share_company'];

}
$total=$price*$qu;
//echo $total,$sn,$sc,$qu,$u ;
//echo $price ;
$c1=mysqli_connect("sharegurucom.000webhostapp.com","id2444408_nandish","id2444408_nandish");
$z1=mysqli_select_db("id2444408_nandish",$c1);

$q2="insert into id2444408_nandish.orderb values('','".$sn."','".$sn."','".$company."','".$u."','".$qu."','".$total."')";
//echo $q2;
$x123=mysqli_query($q2);
$q5="select * from broker where User_id='".$u."'";
$bb=mysqli_query($q5);
while($se=mysqli_fetch_assoc($bb)){
$emailid=$se['Email'];
$nm=$se['First_name']." ".$se['Last_name'];
}	
require 'PHPMailer-master\PHPMailerAutoload.php';
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "shareguru1909@gmail.com"; ///maru
$mail->Password = "ldrp@2016";
$mail->SetFrom("shareguru1909@gmail.com");//user
$mail->Subject = "Thanks for Buying from ShareGuRu!!";
$mail->Body = "Dear ".$nm.",<br>your order for <br>Share Name:  ".$sn."<br>Comapny Name:  ".$company." <br>Quantity:  ".$qu."<br>Total_price:  ".$total."";
$mail->AddAddress($emailid);

 if(!$mail->Send()) {
	$mail->ErrorInfo; 
	//$m1 = mysql_select_db("nandish",$c);
	//$q = "delete from feedback where Feed_uid ='".$a."'";
	//mysql_query($q);
	echo "Mailer Error: " . $mail->ErrorInfo;
	//echo '<script language="javascript">
	//alert("Something went wrong!!!")
	/*window.location.href="BuySellShares.php"
	</script>;*/
 }
 	 else
 {
	if($x123)
{
header("location:BuySellSharesb.php ? OrderDone");
}
else
{
//header("location:BuySellSharesb.php? InvalidDetails");
}

}

}
?>