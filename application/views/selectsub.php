<!DOCTYPE html>
<html>
<head>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style type="text/css">
{
*{
	margin:0px;
	padding:0px;
}

.bgimage
{
	background-image: url("<?php echo base_url('assets/image/back.jpg');?>");
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
.rightMenu h3
{
	padding-left: :70px;
	font-weight: bold;
	color: yellow;
	font-size: 30px;
	padding-bottom: 20px;
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
	
	padding-left: 10px;
	float:right;

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
					  
						<li style="padding-top: 10px; padding-right: 10px;"><img src="<?php echo $user_info->image ;?>" style="height:80px; width:80px ; border:2px solid yellow;"></li>
						<li><center><h3>Welcome &nbsp<?php echo $user_info->Name ; ?></h3></center></li>
						
					</ul>
				</div>
			</div>
			<div class="Mainbody>

	<div class="form-group">

		<select name="subject" id="subject" class="form-controll input-lg">
			<option value="">-select subject-</option>
			<?php 
			foreach($subject_data as $row)
			{
				echo '<option value="'.$row->sid.'">'.$row->sub_name.'</option>';
			}
			?>
		</select>
	</div>
	<br/>
	<div class="form-group">
		<select id="sub_type" name="sub_type" class="form-controll input-lg">
			<option value="">-select type-</option>
		</select>
	</div>


</div>
</div>
</body>
</html>