		
		<!DOCTYPE HTML>
		<html lang="en-US">
		<head>
			<meta charset="UTF-8">
			<title>jquery</title>
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
			<script type="text/javascript" src="js/jquery-ui.min.js"></script>
			<script type="text/javascript" src="js/jquery-ui.js"></script>
			<style type="text/css">
			body{
			padding:0;
			margin:0;
			font-size:20px;
			}
			.main{
			height:900px;
			width:950px;
			background:#342A25;
			margin:10px auto;
			color:white;
			padding:25px;
			}
			#slider{
			margin-top:10px;
			}
			#animation{
			 height:250px;
			 width:250px;
			 background-color:white;
			 border-radius:50%;
			 position:absolute;
			}
			#murad{
			height:300px;
			width:700px;
			margin-top:20px;
			position:relative;
			background-color:red;
			}
			.text{
			    font-size: 25px;
				border: 2px solid black;
				padding: 10px;
				
				color: gray;
				border-radius: 5px;
			 }
			   .bg{
			     background-color: yellow;
			    }
			</style>
			
		</head>
		<body>
		<?php
		$color="color";
		$colvalue="yellow";
		$background="background";
		$backvalue="green";
		$font_size="font-size";
		$font_value="25px";
		$padding="padding";
		$paddingvalue="10px";
		
		
		?>
		
		<script type="text/javascript">
		
				$(document).ready(function(){
				$("#Style").click(function(){
				$("p").css({
				 "<?php echo $color;?>":"<?php echo $colvalue;?>",	
				 "<?php echo $background; ?>":"<?php echo $backvalue;?>",	
				 "<?php echo $font_size;?>":"<?php echo $font_value;?>",	
				 "<?php echo $padding;?>":"<?php echo $paddingvalue;?>"
				});	
				});
					
				
				 });
	
		</script>
		<div class="main">
			
		   <h2>Jquery css()</h2>
		   
		   
		  <button id="Style">Click here</button>
		   
		   <div id="murad">
		      <!-- <div id="animation"></div> --> 
			    <p class="">Mohammed Nur</p>
		   </div>
		   
		   
		   
		</div>   
		</body>
		</html>