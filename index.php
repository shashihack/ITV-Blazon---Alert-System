

<?php
session_start();
include_once 'connect/db.php';
?>



<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
    
</head>
<body style="background-image:url('body.jpg'); background-attachment:fixed; background-properties:fixed;background-repeat:no-repeat;">
<div style="width:300px; height:80px; margin-top:350px; margin-left:350px;">
<img src="blazon.png" height="300px" width="800px">
</div>
<div class="logi">
<img src="logi2.png" style="margin:15px;">
<a href="login/index.php"><h1 style="margin-top:-50px;margin-left:80px; color:#0F5414;">Login as a Guest</h1></a>
</div>
<div class="logi">

<img src="logi.png" style="margin:12px;">
<a href="login/index.php"><h1 style="margin-top:-55px;margin-left:80px; color:#CD983C;">Login as a Student</h1></a>
</div>
</body>
</html>