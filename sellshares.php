<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["sharename"];
$quantity=$_SESSION["quantity"];
$price=$_SESSION["price"];
$cd=mysql_connect("localhost","id2444408_nandish","id2444408_nandish");
$zx=mysql_select_db("id2444408_nandish",$cd);
mysql_query("delete from id2444408_nandish.order where User_id='".$uid."' and Order_name='".$name."'");
$q5="select * from user where User_id='".$uid."'";
$bb=mysql_query($q5);
while($se=mysql_fetch_assoc($bb)){
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
$mail->Username = "shareguru1909@gmail.com"; //maru
$mail->Password = "ldrp@2016";
$mail->SetFrom("shareguru1909@gmail.com");//user
$mail->Subject = "Thanks for Buying from ShareGuRu!!";
$mail->Body = "Dear ".$nm.",<br>you sold Your ".$quantity." of ". $name." and now you get total :".$price."Rupees"; 
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

header("location:BuySellShares.php");
?>