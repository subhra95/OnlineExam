<!DOCTYPE html>
<html>
<head>
	<titlle></titlle>
	 <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">-->
	 <style type="text/css">
	 *{
	margin:0px;
	padding:0px;
}

.bgimage
{
	background-image: url("<?php echo base_url('assets/image/onlineExam.jpg');?>");
	background-size:100% 110%;
	height:100vh;
	width:100%;
}
.header
{
	height:100px;
	width:100%;
	background-color:rgba(0,0,0,0.5);
}
.leftMenu
{
	width:25%;
	line-height:80px;
	float:left;
}
.leftMenu h3
{
	padding-left: :70px;
	font-weight: bold;
	color: white;
	font-size: 30px;
}
.rightMenu
{
	height:100px;
	width:50%;
	float:right;
}
.rightMenu ul li
{
	display:inline-block;
	line-height: 100px;
	color:white;
	font-weight: bold;
	padding-left: 10px;
	font-size: 20px;
	margin-left: 40px;
	margin-right:10px;
}
.rightMenu ul li:hover
{
	color:orange;
}
.body
{
	width:100%;
	margin-top: 185px;
	text-align:center;
}
.body h1
{
	margin: 14px 0px;
	font-weight: bold;
}
#button1,#button2
{
	font-size:20px;
	font-weight: bold;
	background-color: white;
	text-transform: uppercase;
	border:3px solid white;
	margin-top: 15px;

}
	</style>

	</head>
	<body>
		<div class="bgimage">

			<div class="header">
				<div class="leftMenu">
					<h3><i>Online Exam</i></h3>
				</div>

				<div class="rightMenu">
					<ul>
					  <a href="<?php echo base_url('home');?>"><li>Home</li></a>
						<a href="<?php echo base_url ('register') ;?>"><li>Register</li></a>
						<a href="#"><li>About Us</li></a>
					</ul>
				</div>
			</div>

			<div class="body">
				<h4>Register.Login.Start</h4>
				<h1>CREATIVE & EXPERIENCED</h1>

				<a href="#"><button id="button1">Fill it Up</button></a>
				<a href="<?php echo base_url('register') ;?>"><button id="button2">Register</button></a>
			</div>
		</div>
	</body>
</html>