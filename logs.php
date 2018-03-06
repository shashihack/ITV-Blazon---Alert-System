<html>
<head>
<style>
h1{
	font-size:16px;
	font-family:Verdana, Geneva, sans-serif;
	color:#59B9D4;
	padding-bottom:0px;
	margin-top:-4px;
}
h2{
	font-size:10px;
	font-family:Verdana, Geneva, sans-serif;
	color:#CECED6;
	margin-top:-7px;
}
h3{
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
	color:#D98021;
	padding-bottom:px;
	margin-bottom:-5px
	
}
h4{
	font-size:10px;
	font-family:Verdana, Geneva, sans-serif;
	color:#CECED6;
	margin-top:-7px;
}
.comments_content{
	margin:5px;
	padding:5px;
	border-bottom:2px solid #CCC;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius:2px;
}
h5
{
	font-color:red;
	float:right;
	font-size:20px;margin-top:-8px;
}
h5 a
{
	color:red;
	text-decoration:none;
	
}
</style>
</head>

<body style="background:url('back4.jpg'); background-attachment:fixed;">

<!--!<span style="margin-left:150px; color:white; font-size:25px; position:relative;">Posts</span>-->

<?php

require("db/db.php");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");

while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h5><a href='delete.php?id=" . $row['id'] . "'> X</a></h5>";
echo "<h1>" . $row['name'] . "</h1>";
echo "<h4>" . $row['name1'] . "</h4>";
echo "<h2>" . $row['date_publish'] . "</h2>";

echo "<h3>" . $row['comments'] . "</h3>";
echo "</div>";
}
mysqli_close($con);

?>

</body>
</html>
