
<?php
session_start();

?>


<?php
require("db/db.php");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$name1 = $_POST['name1'];
$comments = $_POST['comments'];

{
mysqli_query($con, "INSERT INTO comments(name,name1,comments,clubs_comm_id) VALUES('$name','$name1','$comments','C2')");

}

}
mysqli_close($con);
?>























<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IIITV Cultural Committee</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
      
	 <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
   

<link href="tooplate_style.css" rel="stylesheet" type="text/css" />



<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/ddsmoothmenu.js">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})






	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == '' && form1.id1.value == ''){ //exit if one of the field is blank
			alert('Some field is empty !');
			return;
		})

</script>


</head>
<body>

<div id="tooplate_header">
    <a href="index.html" class="sitetitle"><span style="font-size:60px; font-family:French Script MT; 
	color:white;">
	Cultural</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:40px; font-family:Bauhaus 93; color:white;">
	Committee</span>
	
	</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="../home/index.php" >Home</a></li>
  <li><a href="#about">About</a></li> 
            <li><a href="event.html">Event-Diary</a>
                
            </li>
			 <li><a href="#tooplate_main">Upcoming-Events</a>
                
            </li>
            <li><a href="#frame" >Feedback</a>
                
            </li>
                         
            <li class="last"><a href="alert/alertlogin.php" class="last">Alert!</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->
<div style="width:100%; height:450px; background:url('back.jpg');"><br><br>
<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 48px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/_DSC0361.JPG" alt="Aarabdhi-2k16"  title="Aarabdhi-2k16" data-description="Fresher&apos;s night" />
                </li>
                <li><img src="images/_DSC0065.JPG" alt="Kreiva-2k16"  title="Kreiva-2k16" data-description="Hackathon Winner" />
                </li>
                <li><img src="images/_DSC0081.JPG" alt="Kreiva-2k16"  title="Kreiva-2k16" data-description="Tribute to Madhuri Dixit" />
                </li>
                <li><img src="images/_DSC0053.JPG" alt="Kreiva-2k16"  title="Kreiva-2k16" data-description="Old Melodies Performance by music club" />
                </li>
                <li><img src="images/_DSC0675.JPG" alt="Aarabdhi-2k16"  title="Aarabdhi-2k16" data-description="A wal to remember" />
                </li>
                <li><img src="images/_DSC0524.JPG" alt="Independence Day-2k15"  title="Independence Day-2k15" data-description="Drama-meaning of independence does exist or not?" />
                </li>
                <li><img src="images/_DSC0497.JPG" alt="Kreiva-2k16"  title="Kreiva-2k16" data-description="Rock On- Solid performance" />
                </li>
                <li><a href="nb"><img src="images/SAL_5380.JPG" alt="Institute Day-2k15"  title="Institute Day-2k15" data-description="Celebrating the victory" /></a>
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/_DSC0361-tn.JPG" alt="Aarabdhi-2k16" title="Aarabdhi-2k16" /></li>
                <li><img src="images/_DSC0065-tn.JPG" alt="Kreiva-2k16" title="Kreiva-2k16" /></li>
                <li><img src="images/_DSC0081-tn.JPG" alt="Kreiva-2k16" title="Kreiva-2k16" /></li>
                <li><img src="images/_DSC0053-tn.JPG" alt="Kreiva-2k16" title="Kreiva-2k16" /></li>
                <li><img src="images/_DSC0675-tn.JPG" alt="Aarabdhi-2k16" title="Aarabdhi-2k16" /></li>
                <li><img src="images/_DSC0524-tn.JPG" alt="Independence Day-2k15" title="Independence Day-2k15" /></li>
                <li><img src="images/_DSC0497-tn.JPG" alt="Kreiva-2k16" title="Kreiva-2k16" /></li>
                <li><img src="images/SAL_5380-tn.JPG" alt="Institute Day-2k15" title="Institute Day-2k15" /></li>
            </ul>
        </div>
    </div>
</div></div>
    <div id="tooplate_main">
    	<div id="home_about">
        	<h1 style="color:white; background-color:; height:180px; font-size:14px;">
			<img src="aboutus.png" width="150px"  height="270px"style="float:left; margin-top:40px;">
			<div style="width:400px; margin-left:150px;padding:20px;" id="about">
			 <img src="cover.jpg" width="400px" height="300px">
			</div>
			<div style="width:400px; margin-left:700px;padding:20px; margin-top:-300px" id="about">
			
			<p>The B.Tech,PhD programs are residential programs, and therefore, IIIT Vadodara provides residential
			facilities for all students.Indian Institute of Information Technology Vadodara is an institute 
			established by the Government of India under Public Private Partnership (PPP) mode. The partners
			in this project are Government of India,</p> 
			</div>
			<div style="width:100px; margin-left:1050px;padding:20px; margin-top:-70px;" id="about">
			 <label class="btn" for="modal-2" id="feed">Our Team</label>
			</div>
			</h1>
			</div></div>
			<div style="width:100%; height:450px; background:url('pp5.jpg'); margin-top:-50px;">
			
				<br><h1 style="color:white; text-align:center; width:300px;height:auto;background:#374A4F; font-size:290%;border-radius:5px; box-shadow:3px gray; margin-left:550px;">News & Events</h1><br>
				<img src="event.png" width="150px" height="150px" style="margin-top:-50px; margin-left:50px;">
			<div style="width:250px; height:300px; background:white; margin-left:120px; margin-top:-100px; background-image:url('main.png')"></div>
			
				<img src="event.png" width="150px" height="150px" style="margin-top:-350px; margin-left:440px;">
			<div style="width:250px; height:300px; background:white; margin-left:550px; margin-top:-300px; background-image:url('fk.jpg')"></div>
			<img src="event.png" width="150px" height="150px" style="margin-top:-350px; margin-left:870px;">
			<div style="width:250px; height:300px; background:white; margin-left:970px; margin-top:-300px;background-image:url('zerik.png') "></div>
			</div></div>
			
			  <div style="width:100%;height:300px; background-image:url('images/cc.jpg');margin-top:px; text-align:center;
		padding:2px;">
		<label class="btn" for="modal-1" id="feed">Feedback</label>
		</div>
		<div style="width:30px; height:250px; background:url('images/cont.jpg'); color:white; text-align:vertical; margin-top:-275px; border-radius:4px;" id="contact">
		</div>
		<div style="width:400px; height:250px; background:; margin-left:480px; margin-top:-240px;">
		
		<iframe style="width:400px;height:250px; background:white;" src="logs.php" id="frame"></iframe>		
		
		
		
		</div>
		<div style="width:300px; height:250px; background:; margin-left:100px; margin-top:-255px;">
		<h2 style="color:white; text-align:center;">Cultural Committee Enquiry</h2>
		<img src="loc1.png" width="25px" height="25px" style="margin-left:20px;margin-top:-15px;">
		<p style="color:white; margin-left:54px; margin-top:-25px;">
		 Address: IIIT Vadodara<br>GEC Block-09 IC Department,Sector 28 <br>Gandhinagar.382028
		<br><span style="color:white; font-size:120%;">Phone No.-7567775854</span>
		</p>
		<img src="mail.png" width="25px" height="25px" style="margin-left:20px;margin-top:-px;">
		<p style="color:white; margin-left:54px; margin-top:-25px;">
		scc@iiitvadodara.ac.in
		</p>
		</div>
       
	   <div style="width:300px; height:250px; background:; margin-left:950px; margin-top:-245px;">
		<h2 style="color:white; text-align:center;">Notifications</h2>
		</div>
	   </div> 

</div>
			
			
			
<input class="modal-state" id="modal-1" type="checkbox" />
<div class="modal">
  <label class="modal__bg" for="modal-1"></label>
  <div class="modal__inner">
    <label class="modal__close" for="modal-1"></label>
      <h1 style="color:white; font-style:italic; margin-top:-5px;">
	<img src="feed1.png" width="50px" height="50px">Feedback</h1>
	<h3 style="width:100%; height:5px; background:orange; margin-top:-30px;"></h3>
    <form  name="form1" method="post">
	<input type="text" name="name" 
	placeholder="&nbsp;&nbsp;Enter your name" style="width:300px; border:2px solid #686E73;
	height:35px; background:white; border-radius:15px; text-decoration:none; font-stretch:10px; padding:5px;">
  <br><input type="text" name="name1" placeholder="&nbsp;&nbsp;Enter your ID" style="width:300px; border:2px solid #686E73;
	height:35px; background:white; border-radius:15px; margin-top:8px; text-decoration:none; font-stretch:10px; padding:5px;">
  <br><textarea name="comments" placeholder="&nbsp;&nbsp;Leave Comments Here..." 
			style="width:500px; height:65px; background:white; text-indent;10px;  
			border:2px solid #686E73;border-radius:15px; margin-top:8px; padding:5px; font-stretch:10px;"></textarea>
  <input type="submit" name="submit" onClick="commentSubmit()" style="value:none; background:transparent url('red.png');
  width:50px; height:50px; border:none; color:transparent; margin-top:-20px; margin-left:-5px;">
  </form>
		<div></div></div></div>

		<input class="modal-state" id="modal-2" type="checkbox" />
<div class="modal">
  <label class="modal__bg" for="modal-2"></label>
  <div class="modal__inner">
    <label class="modal__close" for="modal-2"></label>
   
      <h1 style="color:white; font-style:italic; margin-top:-5px;">
	<img src="images/mem2.png" width="50px" height="50px">Members</h1>
	<h3 style="width:100%; height:5px; background:#26FA30; margin-top:-25px;"></h3>
    <div style="background:; width:100%; height:70%;">
	<div>
	<img src="ajay.jpg" title="Dr.Ajay Nath Jha">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="barnali.jpg" title="Dr. Barnali Chetia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="kamal.jpg" title="Kamal Kishore Jha">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="mentor.png" width="200px" height="80px" style="margin-top:-20px;">
	<img src="shashi1.gif" title="Shashi Bhushan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="vikas.jpg"  width="120px" height="100px"title="Vikas Rajput">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="vikram.jpg"  width="120px" height="100px"title="Shubhendra Vikram">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="shreya.jpg"  width="120px" height="100px"title="Shreya Singh">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	</div>
  </div>
</div>
		
</body>
</html>