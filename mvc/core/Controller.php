<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }

     public function Mailer($nameUser,$emailUser,$subject,$body,$link){
     	// su dung thu vien php mailer
       include "./mvc/core/PHPMailer/PHPMailerAutoload.php";

       	$mail = new PHPMailer();
		$mail->IsSMTP(); // set mailer to use SMTP
		$mail->Host = "smtp.gmail.com"; // specify main and backup server
		$mail->Port = 465; // set the port to use
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->SMTPSecure = 'ssl';
		$mail->Username = "webdoan20192019@gmail.com"; //Địa chỉ gmail sử dụng để gửi email
		$mail->Password = "04031604"; // your SMTP password or your gmail password
		$from = "webdoan20192019@gmail.com"; // Khi người sử dụng bấm reply sẽ gửi đến email này
		$to=$emailUser; // Email người nhận (email thực)
		$name="Xin chào: ".$nameUser; // Tên người nhận
		$mail->From = $from;
		$mail->FromName = "Admin@.Adidas"; // Tên người gửi 
		$mail->AddAddress($to,$name);
		$mail->AddReplyTo($from,"Hệ thống Giày Adidas");
		$mail->WordWrap = 50; // set word wrap
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = $subject; // chủ đề
		$mail->Body = "Thông báo! ". $body ."<hr> Link xác nhận: <a href='"."http://localhost:8080/DoAnWebBanGiay-2019/".$link."'>"."http://localhost:8080/DoAnWebBanGiay-2019/".$link."</a>";
		//$mail->SMTPDebug = 2;//Hiện debug lỗi. Mặc định sẽ tắt lỗi này
		
		if(!$mail->Send())
		{
			echo "<h3>Err: " . $mail->ErrorInfo . '</h3>';
		}
		else
		{
			echo "<h3>Send mail thành công</h3>";
		}
    }

   
}
?>