		
	
		
		
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
			text-align:center;

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
			 margin-top:20px;
			}
			#para{
			height:400px;
			width:750px;
			background:gray;
			margin-top:20px;
			position:relative;
			
			}
			</style>
			
		</head>
		<body>
		
		<?php
	
		function inputname()
		{
			 echo "Nur mohammed Murad";
		}
		function writehtml()
		{
			 echo "<b>physics</b>";
		}
		
		function writetext()
		{
			 echo "java,php";
		}
		
	   ?>	
		
		<script type="text/javascript">
		
		$("document").ready(function(){
		
		$("#name").click(function(){
			
		$("#getname").val("<?php inputname();?>");	
		});
		
		$("#dep").click(function(){
		$("#line1").html("<?php writehtml();?>");	
			
		});
		
		$("#skill").click(function(){
		$("#line2").text("<?php writetext();?>");	
			
		});
            
		 
	
		});
		</script>
		<div class="main">
			
		   <h2>Jquery set contant()  Function.</h2>
		   
		   <button id="name">Set name</button>
		   <button id="dep">set department</button>
		   <button id="skill">set skill</button>
		   
		   
		   <div id="para">
		   
		   <label for="name">Name:</label>
		   <input type="text" id="getname">
		   
		   <p id="line1"><strong>Department</strong></p>
		     <p id="line2">skill</p>
		  
			
		   </div>
		   
		   
		   
		   
		 
		   
		   
		   
		   </div>   
		</body>
		</html>