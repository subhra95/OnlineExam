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
	background-image: url("<?php echo base_url('assets/image/slider1.jpg');?>");
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
	   <div class="Mainbody">
	   	<div class="error">
		<?php 
		if(isset($message))
		{
			echo $message;
		}

		if(isset($upload_error))
		{
			echo $upload_error;
		}
		?>
	</div>
		<form method="post" action="<?php echo base_url('registerProcess');?>" enctype="multipart/form-data">
			<h3><i><u>Registration</u></i></h3>
			<center>
			<table border="2px solid white" height="250px" width="150px">
				<tr>
				<th>Enter Name:</th>
				<td><input type="text" name="Name" placeholder="enter name.."></td>
				<?php echo form_error('nam');?>	
				</tr>
				<tr>
					<th>Email-id</th>
			    <td><input type="text" name="Email" placeholder="enter email.."></td>
			    <?php echo form_error('eml') ;?>
				</tr>

				<tr>
					<th>Rollno</th>
			    <td><input type="number" name="RollNo" placeholder="enter rollNo.."></td>
			    <?php echo form_error('roll') ;?>
				</tr>
				<tr>
					<th>Password</th>
				<td><input type="password" name="password" placeholder="enter password.."></td>	
				<?php echo form_error('pass'); ?>
			</tr>

			<tr>
				<th>Gender</th>
			<td><input type="radio" name="Gender" value="Male">Male
               <input type="radio" name="Gender" value="Female">Female
			</td>
			<?php echo form_error('gndr'); ?>	

			</tr>
			<tr>
			<th>Enter DOB</th>	
			<td><input type="date" name="DOB" placeholder="enter date-of-birth.."></td>	
             <?php echo form_error('dob') ;?>
			</tr>
			<tr>

				<tr>
			<th>upload image</th>	
			<td><input type="file" name="imagefile"></td>	
       
			</tr>
			<tr>
				
				<td colspan="2">
					<center>
					<input type="submit" name="submit" value="register">
				</center>
				</td>
		
			</tr>
			</table>
			<h3>Already registered?<a href="<?php echo base_url('login');?>">Click here to login</a>
		</center>
		</form>
	</div>
	</div>
	</body>
</html>