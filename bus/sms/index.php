




<?php
mysql_connect("localhost","root","");
mysql_select_db("itv_blazon");

$no = array();
$result = mysql_query("SELECT * FROM student_details, club_comm_details where student_details.student_id = club_comm_details.student_id and club_comm_details.club_comm_id = 'CA' ");
while($row = mysql_fetch_assoc($result)){
	 $no[] = $row['phone_no'];
}

if(isset($_POST["submit"])){
	//$mno=$_POST["mno"];
	$message=$_POST["message"];
	//send_mail($mno,$message);
	
foreach ($no as $key => $value) {
	echo "mobile no = ".$value."<br>";
	send_mail($value,$message);


}
}
function send_mail($mno,$message){
if(preg_match('/^[A-Z0-9]{10}$/',$mno) && !empty($message)){
$ch = curl_init();
$user="shashibhushan0911@gmail.com:shashi0911";
$receipientno=$mno; 
$senderID="TEST SMS"; 
$msgtxt=$message; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
	{ 
		echo $buffer; 
		echo 'message sent';
	} 
curl_close($ch);

	}
	else
	{
		echo'Not a valid information';
	}
}

?>









<html>
<body style="background-image:url('55.jpg'); opacity:0.8;">
<div style="width:400px;height:430px;background:#2F4F4F; float:left;margin:60px; border-radius:50px;
border:5px solid gray; color:white; ">
	<div style="width:300px; height:auto;">
		<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;<img src="2.png"></center>
		</div>
		<div style="width:300px; height:300px; color:white;  padding:5px;
		 margin-left:40px; ">
		<form  method="post" >
<table width="400" style="color:white; font-size:120%;">
  <!--<tr>
    <td align="right" valign="top" >Sender:</td>
    <td align="left"><input type="text" name="from"  id="from" size="23" /></td>
  </tr>
  <tr>
    <td align="right" valign="top">To:</td>
    <td align="left"><input type="text" name="mno"  id="to" size="23" /></td>
  </tr>
  
  -->
  <tr>
    <td align="right" valign="top">Message:</td>
    <td align="left"><textarea name="message" cols="25" rows="10" id="message"></textarea></td>
  </tr>
  <tr><br>
    <td colspan="3" align="center"><input type="submit" name="submit" value="Send" size="10"/></td>
    </tr>
</table>
</form>
		
		</div></div>
<a href="../index.php"><img src="bl2.png" width="500px" height="300" style="margin-left:200px; margin-top:100px;"></a>
</body>
</html>










