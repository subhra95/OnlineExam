<!DOCTYPE html>
<html>
<head>
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
.Mainbody
{
	width:100%;
	margin-top: 185px;
	text-align:center;
}
	</head>
</style>

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
			<div class="Mainbody">
				<?php 
				if(isset($message))
				{
					echo $message;
				}
				?>
             
             <form method="post" action="<?php echo base_url('loginProcess');?>">
             	<center>
             	<h3><i><u>Login Here</u></i></h3>
             	<table border="2px solid white" height="200px" width="150px">
             	
             	<tr>
             		<th>Enter Email:</th>
             		<td><input type="text" name="eml" placeholder="enter emailid here..."></td>
             		<?php echo form_error('eml'); ?>
             	</tr>

             	<tr>
             		<th>Enter Password:</th>
             		<td><input type="password" name="pass" placeholder="enter password here..."></td>
             		<?php echo form_error('pass');?>
             	</tr>

             	<tr>
                   <td colspan="2">
					<center>
					<input type="submit" name="submit" value="login">
				</center>
				</td>
             	</tr>
             	</table>
             </center>
             </form>

			</div>

	</div>
</body>
</html>