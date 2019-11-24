<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost:8080/webgiay-MVC/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>trang admin</title>
	<link rel="stylesheet" href="./mvc/views/css/styleAdmind.css">
</head>
<body>
	<?php 
		require_once('block/MenuAdmin.php');
	 ?>
	 
	 <?php
		 if(isset($data["page"])){
			 require_once("./mvc/views/admin/".$data["page"].".php");
			
		}else{
			echo "<h1>Chào mừng bạn đến voi page ADmin!!!s </h1>";
		}
	 ?>
	 
	
</body>
</html