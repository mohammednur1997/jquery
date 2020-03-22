		
	
		
		
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
	     function app(){
		   echo "Murad";	 
		 }
		  function prep(){
		   echo "Nur";	 
		 }
		  function after(){
		   echo "Nur ";	 
		 }
		  function before(){
		   echo "Murad";	 
		 }
		
		
	   ?>	
		
		<script type="text/javascript">
		
		$("document").ready(function(){
		
		$("#append").click(function(){
		$("p").append("<?php app();?>");
		});
		
		$("#prepend").click(function(){
			
			$("p").prepend("<?php prep();?>");
			
		});
		
		$("#after").click(function(){
			
			$("p").after("<?php after();?>");
			
		});
		$("#before").click(function(){
			
			$("p").before("<?php before();?>");
			
		});
		
		
            
		 
	
		});
		</script>
		<div class="main">
			
		   <h2>Jquery set contant()  Function.</h2>
		   
		   <button id="append">click append</button>
		   <button id="prepend">click prepend</button>
		   <button id="after">click after</button>
		   <button id="before">click before</button>
		   
		   
		   
		   <div id="para">
		     <p>mohammed</p>
		   </div>
		 
		   
		   </div>   
		</body>
		</html>