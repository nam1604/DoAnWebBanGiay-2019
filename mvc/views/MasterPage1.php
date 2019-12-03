<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="http://localhost:8080/DoAnWebBanGiay-2019/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>web ban giay</title>
  <link rel="stylesheet" href="./mvc/views/css/responsive.css">
  <link rel="stylesheet" href="./mvc/views/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css"></link>
</head>
<body>
<?php 
  require_once('block/MenuTopHomePage.php');
 ?>
  <main>
    <!-- backgroup -->
     <?php 
      require_once('block/BackgroudHomePage.php');
     ?>
    <!-- menu-loaisanpham -->
   <?php 
      require_once('block/MenuLoaiSanPham.php');
     ?>
    <!-- show content main -->
  <?php
     if(isset($data["page"])){
       require_once("pages/".$data['page'].".php");
      
    }else{
      echo "<h1>Chung toi dang khac phuc loi </h1>";
    }
   ?>

    <!-- Testimonials section -->
     <?php 
      require_once('block/TestimonialsHomPage.php');
     ?>
   
   </main>
    <?php 
      require_once('block/FooterHomePage.php');
     ?>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
     <script src="./public/js/main.js" ></script>
</body>
</html>