<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost:8080/DoAnWebBanGiay-2019/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>trang admin</title>
	<link rel="stylesheet" href="./mvc/views/css/styleAdmind.css">
</head>
<body>
	
	 <?php
	 	if(!isset($_SESSION)){
		    session_start();
		}
		if ($data['page']=='PageAdminDangnhap') {
			require_once("./mvc/views/admin/".$data["page"].".php");
		}else{
			if (!isset($_SESSION['usernameAdmin-login'])) {
				require_once("./mvc/views/admin/".'PageAdminDangnhap'.".php");
			}else{ 
				require_once('block/MenuAdmin.php');
				 require_once("./mvc/views/admin/".$data["page"].".php");
				}	
		}
	
	 ?>
	 
	
</body>
</html