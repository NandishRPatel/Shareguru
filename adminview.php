<?php
session_start();
if(!isset($_SESSION["adminid"])){
header("location:admincheck.php");
}
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");


if(!$c){
die("cannot connect : " . mysqli_error());
}
 $m=mysqli_select_db($c,"id2444408_nandish");

if(isset($_POST['uedit'])){
$UpdateQuery = "UPDATE user SET First_name='$_POST[ufname]' ,Last_name='$_POST[ulname]',Phone_no='$_POST[umob]', Email='$_POST[uem]' ,User_id='$_POST[uuid]',Password='$_POST[upwd]' ,Date='$_POST[udd]',Month='$_POST[umm]',Year='$_POST[uyy]',Address='$_POST[uadd]',Sex='$_POST[usex]' WHERE User_id='$_POST[uuid]'";
mysqli_query($c,$UpdateQuery);	
};
if(isset($_POST['bedit'])){
$UpdateQuery1 = "UPDATE broker SET First_name='$_POST[bfname]' ,Last_name='$_POST[blname]',Phone_no='$_POST[bmob]', Email='$_POST[bem]' ,User_id='$_POST[buid]',Password='$_POST[bpwd]' ,Date='$_POST[bdd]',Month='$_POST[bmm]',Year='$_POST[byy]',Company_address='$_POST[compa]',Company_name='$_POST[compn]',Sex='$_POST[bsex]' WHERE User_id='$_POST[buid]'";
mysqli_query($c,$UpdateQuery1);	
};

if(isset($_POST['udelete'])){
$DeleteQuery = "DELETE from user WHERE User_id='$_POST[uuid]'";
mysqli_query($c,$DeleteQuery);	
};


if(isset($_POST['bdelete'])){
$DeleteQuery1 = "DELETE from broker WHERE User_id='$_POST[buid]'";
mysqli_query($c,$DeleteQuery1);	
};


if(isset($_POST['aedit'])){
//echo $_POST['ar']."<br>".$_POST['at'];
$UpdateQuery = "UPDATE article SET Atitle='$_POST[at]' ,Article='$_POST[ar]',abid='$_POST[abid]' WHERE Atitle='$_POST[at]' OR Article='$_POST[ar]'";
mysqli_query($c,$UpdateQuery);	
};

if(isset($_POST['adelete'])){
$DeleteQuery = "DELETE from article WHERE Atitle='$_POST[at]'";
mysqli_query($c,$DeleteQuery);	
};

if(isset($_POST['oedit'])){
$Upd = "UPDATE id2444408_nandish.order SET User_id='$_POST[orderid]' ,Share_name='$_POST[sharename]',Share_company='$_POST[sharecomp]', Quantity='$_POST[quantity]' , Total_price='$_POST[total]' WHERE User_id='$_POST[orderid]' and Share_name='$_POST[sharename]'";
mysqli_query($c,$Upd);	
};

if(isset($_POST['odelete'])){
$Del = "DELETE from id2444408_nandish.order WHERE User_id='$_POST[orderid]' and Share_name='$_POST[sharename]' ";
mysqli_query($c,$Del);	
};

if(isset($_POST['fedit'])){
$Upd = "UPDATE feedback SET Feed_uid='$_POST[feedid]' ,Feedback='$_POST[feedback]' WHERE Feed_uid='$_POST[feedid]' and Id='$_POST[id]'";
mysqli_query($c,$Upd);	
};

if(isset($_POST['fdelete'])){
$Del = "DELETE from feedback WHERE Feed_uid='$_POST[feedid]' and Id='$_POST[id]' ";
mysqli_query($c,$Del);	
};

/*if(isset($_POST['add'])){
$AddQuery = "INSERT INTO user (uname,email,pwd,mobile) VALUES ('$_POST[auname]','$_POST[aemail]','$_POST[apwd]','$_POST[amobile]')";
mysqli_query($AddQuery,$c);	
};
*/


$q="select * from user";
$r=mysqli_query($c,$q);
?>

<a href="laodgmoiunt.php" rel="nofollow" onClick="return confirm('Do You Really Want To LogOut??');"> <input type="button" class="button1" value="LogOut"></a>
<?php
echo "<br><br>";
echo "<p align=center>"."<b>"."<u>"."USER TABLE"."</u>"."</b>"."</P>";
echo "<table border='1' cellspacing='3' cellpadding='3' align=center><tr><td>"."<b>Id</b></td><td><b>"."First_name"."</b>"."</td><td>"."<b>"."Last_name"."</b>"."</td><td>"."<b>"."Phone_no"."</b>"."</td><td>"."<b>"."Email"."</b>"."</td><td>"."<b>"."User_id"."</b>"."</td><td>"."<b>"."Password"."</b>"."</td><td>"."<b>"."DD"."</b>"."</td><td>"."<b>"."MM"."</b>"."</td><td>"."<b>"."YY"."</b>"."</td><td>"."<b>"."Address"."</b>"."</td><td>"."<b>"."Sex"."</b>"."</td></tr>";
while($res=mysqli_fetch_assoc($r))
{

echo"<form action=adminview.php method=post>";
	echo"<tr>";
	echo"<td>" . $res['Uid'] ."</td>";
	echo"<td>" . "<input type=text name=ufname value=" . $res['First_name'] .">". " </td>";
	echo"<td>" . "<input type=text name=ulname value=" . $res['Last_name'] .">". " </td>";
	echo"<td>" . "<input type=text name=umob value=" . $res['Phone_no'] .">". " </td>";
	echo"<td>" . "<input type=text name=uem value=" . $res['Email'] .">". " </td>";
	echo"<td>" . "<input type=text name=uuid value=" . $res['User_id'] .">". " </td>";
	echo"<td>" . "<input type=text name=upwd value=" . $res['Password'] .">". " </td>";		
	echo"<td>" . "<input type=text name=udd value=" . $res['Date'] .">". " </td>";
	echo"<td>" . "<input type=text name=umm value=" . $res['Month'] .">". " </td>";
	echo"<td>" . "<input type=text name=uyy value=" . $res['Year'] .">". " </td>";
	echo"<td>" . "<input type=text name=uadd value=" . $res['Address'] .">". " </td>";		
	echo"<td>" . "<input type=text name=usex value=" . $res['Sex'] .">". " </td>";		
	echo"<td >" . "<input type=submit name=uedit value=Edit" .">". "</td>";
	echo"<td>" . "<input type=submit name=udelete value=Delete" .">". "</td></tr>";
	echo"</form>";

}
echo "</table>";

echo "<br><br><br><br>";


$x="select * from broker";
$y=mysqli_query($c,$x);
echo "<p align=center>"."<b>"."<u>"."BROKER TABLE"."</u>"."</b>"."</P>";

echo "<table border='1' cellspacing='3' cellpadding='3' align=center>"."<tr><td><b>"."Id"."</b></td><td><b>"."First_name"."</b>"."</td><td>"."<b>"."Last_name"."</b>"."</td><td>"."<b>"."Phone_no"."</b>"."</td><td>"."<b>"."Email"."</b>"."</td><td>"."<b>"."User_id"."</b>"."</td><td>"."<b>"."Password"."</b>"."</td><td>"."<b>"."DD"."</b>"."</td><td>"."<b>"."MM"."</b>"."</td><td>"."<b>"."YY"."</b>"."</td><td>"."<b>"."Company_name"."</b>"."</td><td>"."<b>"."Company_Address"."</b>"."</td><td>"."<b>"."Sex"."</b>"."</td></tr>";
while($re=mysqli_fetch_assoc($y))
{
	

echo"<form action=adminview.php method=post>";
	echo"<tr>";
	echo"<td>" . $re['Bid'] ."</td>";
	echo"<td>" . "<input type=text name=bfname value=" . $re['First_name'] .">". " </td>";
	echo"<td>" . "<input type=text name=blname value=" . $re['Last_name'] .">". " </td>";
	echo"<td>" . "<input type=text name=bmob value=" . $re['Phone_no'] .">". " </td>";
	echo"<td>" . "<input type=text name=bem value=" . $re['Email'] .">". " </td>";
	echo"<td>" . "<input type=text name=buid value=" . $re['User_id'] .">". " </td>";
	echo"<td>" . "<input type=text name=bpwd value=" . $re['Password'] .">". " </td>";		
	echo"<td>" . "<input type=text name=bdd value=" . $re['Date'] .">"." </td>";
	echo"<td>" . "<input type=text name=bmm value=" . $re['Month'] .">"." </td>";	
	echo"<td>" . "<input type=text name=byy value=" . $re['Year'] .">"." </td>";
	echo"<td>" . "<input type=text name=compn value=" . $re['Company_name'] .">". " </td>";		
	echo"<td>" . "<input type=text name=compa value=" . $re['Company_address'] .">". " </td>";		
	echo"<td>" . "<input type=text name=bsex value=" . $re['Sex'] .">". " </td>";		
	echo"<td >" . "<input type=submit name=bedit value=Edit" . ">"."</td>";
	echo"<td>" . "<input type=submit name=bdelete value=Delete" .">". "</td></tr>";
	echo"</form>";
}
echo "</table>";


echo "<br><br><br><br>";
echo "<p align=center>"."<b>"."<u>"."ARTICLE TABLE"."</u>"."</b>"."</P>";
echo "<table border='1' cellspacing='3' cellpadding='3' align=center><tr><td>"."<b>"."Id"."</b></td><td>"."<b>"."ABID"."</b></td><td align=center>"."<b>"."Atittle"."</b></td>"."<td align=center>"."<b>"."Article"."</b></td></tr>";
$m="select * from article";
$n=mysqli_query($c,$m);

while($rex=mysqli_fetch_assoc($n))
{

echo"<form action=adminview.php method=post>";
	echo"<tr>";
	echo"<td>" . $rex['Aid'] ."</td>";
echo "<td><textarea cols='40' rows='8' name=abid>".htmlspecialchars($rex['abid'])."</textarea>". " </td>";	
	echo "<td><textarea cols='40' rows='8' name=at>".htmlspecialchars($rex['Atitle'])."</textarea>". " </td>";
	echo "<td><textarea cols='40' rows='10' name=ar>".htmlspecialchars($rex['Article'])."</textarea>"." </td>";
	echo"<td >" . "<input type=submit name=aedit value=Edit" .">". "</td>";
	echo"<td>" . "<input type=submit name=adelete value=Delete" .">". "</td></tr>";
	echo"</form>";
}


echo "</table>";

echo "<br><br><br><br>";
echo "<p align=center>"."<b>"."<u>"."ORDER TABLE"."</u>"."</b>"."</P>";
echo "<table border='1' cellspacing='3' cellpadding='3' align=center><tr><td>"."<b>"."Id"."</b></td><td>"."<b>"."USERID"."</b></td><td align=center>"."<b>"."Share_name"."</b></td>"."<td align=center>"."<b>"."Share_company"."</b></td>"."<td align=center>"."<b>"."Quantity"."</b></td>"."<td align=center><b>Total_price</b></td></tr>";
$maa="select * from id2444408_nandish.order";
$naa=mysqli_query($c,$maa);

while($rexy=mysqli_fetch_assoc($naa))
{

echo"<form action=adminview.php method=post>";
	echo"<tr>";
	echo"<td>" . $rexy['Id'] ."</td>";
	echo"<td>" . "<input type=text name=orderid value=" . $rexy['User_id'] .">". " </td>";
	echo"<td>" . "<input type=text name=sharename value=" . $rexy['Share_name'] .">". " </td>";
	echo"<td>" . "<input type=text name=sharecomp value=" . $rexy['Share_company'] .">". " </td>";
	echo"<td>" . "<input type=text name=quantity value=" . $rexy['Quantity'] .">". " </td>";
	echo"<td>" . "<input type=text name=total value=" . $rexy['Total_price'] .">". " </td>";
	echo"<td >" . "<input type=submit name=oedit value=Edit" .">". "</td>";
	echo"<td>" . "<input type=submit name=odelete value=Delete" .">". "</td></tr>";
	echo"</form>";
}


echo "</table>";



echo "<br><br><br><br>";
echo "<p align=center>"."<b>"."<u>"."FEEDBACK TABLE"."</u>"."</b>"."</P>";
echo "<table border='1' cellspacing='3' cellpadding='3' align=center><tr><td>"."<b>"."Id"."</b></td><td>"."<b>"."Feed_id"."</b></td><td align=center>"."<b>"."Feedback"."</b></td></tr>";
$paa="select * from id2444408_nandish.feedback";
$daa=mysqli_query($c,$paa);

while($rel=mysqli_fetch_assoc($daa))
{

echo"<form action=adminview.php method=post>";
	echo"<tr>";
	echo"<td>" ."<input type=text name=id value=" .$rel['Id'] .">"."</td>";
	echo"<td>" . "<input type=text name=feedid value=" . $rel['Feed_uid'] .">". " </td>";
	echo"<td>" . "<input type=text name=feedback value=" . $rel['Feedback'] .">". " </td>";
	echo"<td >" . "<input type=submit name=fedit value=Edit" .">". "</td>";
	echo"<td>" . "<input type=submit name=fdelete value=Delete" .">". "</td></tr>";
	echo"</form>";
}


echo "</table>";







//$update_begin_insurance = "UPDATE vehicles SET begin_insurance_date = '$begin_insurance' WHERE plate = '$plate'";
//$Upd = "UPDATE feedback SET Feed_uid='$_POST[feedid]' ,Feedback='$_POST[feedback]' WHERE Feed_uid='$_POST[feedid]' and Id='$_POST[id]'";



?>