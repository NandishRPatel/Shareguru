<?php

$a=$_POST["feed1"];
$b=$_POST["feed2"];
$c = mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$s = mysqli_select_db($c,"id2444408_nandish");
$q = "insert into feedbackb(Feed_bid,Feedback) values('".$a."','".$b."')";
//echo $q;
$r = mysqli_query($c,$q);

//$c123 = mysql_connect("localhost","root","");
//$s123 = mysql_select_db("nandish",$c123);
$q1="select * from broker where User_id='".$a."'";
//echo "<br>".$q1;
$aa=mysqli_query($c,$q1);
while($re=mysqli_fetch_assoc($aa)){
$email=$re['Email'];
$name=$re['First_name'].$re['Last_name'];
}	


$msg = "Dear ".$name.",\nThanks for your feedback on shareguru.tk"."\nWe will try to implement your good thoughts"."\nYour message is attached below"."\nMessage:".$b."" ;
$msg = wordwrap($msg,70);
$mail=mail($email,"Thanks for your feedback",$msg);


 if(!$mail) {
	echo '<script language="javascript">
	alert("Something went wrong!!!")
	window.location.href="AboutUsb.php"
	</script>';
 }
 	 else
 {
	echo '<script language="javascript">
	alert("Thanks for your feedback!")
	window.location.href="Homepageb.php"
	</script>';
 }

?>

/*
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
$mail->Subject = "Thanks for your feedback";
$mail->Body = "Dear ".$name.",<br> Thanks for your feedback on www.ShareGuRu.com. We will try to implement your good thoughts<br><br>Your message is attached below.<br><br>Message:".$b."" ;
$mail->AddAddress($email);

 if(!$mail->Send()) {
	$mail->ErrorInfo; 
	//$m1 = mysql_select_db("nandish",$c);
	//$q = "delete from feedback where Feed_uid ='".$a."'";
	//mysql_query($q);
	echo "Mailer Error: " . $mail->ErrorInfo;
	echo '<script language="javascript">
	alert("Something went wrong!!!")
	window.location.href="AboutUsb.php"
	</script>';
 }
 	 else
 {
	echo '<script language="javascript">
	alert("Thanks for your feedback!")
	window.location.href="Homepageb.php"
	</script>';
 }*/