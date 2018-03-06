

<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: ../index.php");
}

include_once 'connect.php';


if (isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM student_details WHERE email_id = '" . $email. "' and phone_no = '" .$password. "' and s_id = 'ccs' ");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: ../sms/index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>









<!DOCTYPE html>
<html>
<head>
	<title>Alert!</title>
</head>
<body style="background:url('back6.jpg')">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div style="width:400px; height:450px; border:1px solid white; margin:auto; margin-top:50px; background: url('bck.png'); ">
	<img src="logo.png" width="100px" height="60px" style="margin-left:140px;">
	<img src="logi2.png" width="55px" height="50px" style="margin-left:-80px;  position: absolute; ">
	
	<h1 style="margin-left:100px; font-family: Aldhabi; font-size: 60px; font-weight: 5px;  margin-top: -5px; color: #FA9BEF; position:absolute;">Alert-Login</h1>
	<h2 style="color:white; font-family: calibiri; font-size:15px; font-weight: 5px; margin-left:30px; margin-top: 100px; width: 150px; ">User Name</h2>
	<input type="text" name="email" required="required" style=" background: #D6BFD2; border:1px solid orange; outline: none; margin-left: 30px; width: 340px; height: 30px; padding: 5px; " >
	<h2 style="color:white; font-family: calibiri; font-size:15px; font-weight: 5px; margin-left:30px; margin-top: 30px; width: 150px; ">Password</h2>
	<input type="password" name="password" required="" style=" background:#D6BFD2; border:1px solid orange; outline: none; margin-left: 30px; width: 340px; height: 30px; padding: 5px; " >
	<input type="submit" name="submit" value="Go"  style=" background: #BF08AA;  border-radius:25px ;outline: none; margin-left: 130px; width: 150px; height: 40px ; margin-top: 40px; font-size:20px; color:white;" >
	</form>
</div>
</body>
</html>