<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
	<style type="text/css">
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
	margin-top: 100px;
	text-align:center;
}
.MainBody h3:hover
{
	font-size: 20px;
	font-weight: bold;
	color:green;
	margin-top:20px;
}
.box
{
	background-color: #d2ed7b;
	display: flex;
	border:1px solid transparent;
	width:400px;
	height:100px;
	margin: 10px;

}

</style>
</head>
<body>
<!--<h3>Welcome</h3><?php echo $user_info->Name ; ?><br>
<h3>Image</h3><center><div><img src="<?php echo $user_info->image ;?>" style="height:150px; width:150px ;"></div></center>-->
<div class="bgimage">

	<div class="header">
				<div class="leftMenu">
					<h3><i>Online Exam</i></h3>
				</div>

				<div class="rightMenu">
					<ul>
					  
						<li></li>
						<li></li>
						
					</ul>
				</div>
			</div>

   <div class="Mainbody">
	   	

			      <h3 style="margin-top:0px;"><i><u>choose subject</u></i></h3></a>
			      <center>
	     <div class="box">
				<div class="form-group" style="width:110px;">
			        <select name="subject" id="subject" class="form-control-input-lg" style="height:60px; margin-top: 10px; background-color: #7dd14d; margin:20px; border:1px solid black">
			        <option value="">-select subject-</option>
			        <?php 
			         foreach($subject_data as $row)
			         {
			         	$sid=$row->sid;
				        echo '<option value="'.$row->sid.'">'.$row->sub_name.'</option>';
			         }
			         ?>
		             </select>

	           </div>
                
                <div class="form-group" style="width:110px;">
                	<select name="subtype" id="subtype" class="form-control-input-lg" style="height:60px; margin-top: 10px; background-color: #7dd14d; margin:20px; border:1px solid black;">
                		<option value="">-select Type-</option>
                	</select>
                </div>
              <!-- <a class="btn btn-danger" style="height:60px; margin:20px; border:1px solid black;" 
                href="<?php echo base_url('ChooseSubject/getCategory');?>"><h3 style="padding-bottom:20px;"><b>START</b></h3></a>-->
               <button  class="btn btn-danger" style="height:60px; margin:20px; border:1px solid black;"
                onclick="getType()"><h3 style="padding-bottom:20px;"><b>START</b></h3></button>
			
	      </div>
	      <div id="result" class="form-group" style="width:110px;">
	      <select id="ques" class="form-control-input-lg" style="height:60px; margin-top: 10px; background-color: #7dd14d; margin:20px; border:1px solid black;">
	      </select>
	  </div>
	      </center>
   </div>
</div>



<script type="text/javascript">

	$(function(){

		$("#subject").change(function(){
			var sub_id = $("#subject").val();
			if(sub_id!="")
			{
				$.ajax({

					url:"<?php echo base_url('getSubType'); ?>",
					method:'POST',
					data:{sub_id:sub_id},
					success:function(data)
					{
						$("#subtype").html(data);
					}
				});
			}

			else
			{
				$("#subtype").html('<option value="">-select type-</option>');
			}
		});
	});



	function getType()
	{
		var stype = $('#subtype').val();
		//alert(stype);
		if(stype!="")
		{
			$.ajax({

				url:"<?php echo base_url('getQues'); ?>",
				method:'POST',
				data:{stype:stype},
				success:function(data)
				{
					$("#result").html(data);
				}
			});
		}
	}
	</script>
</body>
</html>