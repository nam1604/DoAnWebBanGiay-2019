<?php
class HomeUserModel extends DB{
    
    public function insert_user($hoten,$sdt,$email,$password,$gioitinh,$trangthaiActive){
       $sql="INSERT INTO dbl_user(hoten,sdt,email,password,gioitinh,trangthaiactive) VALUES('$hoten','$sdt','$email','$password','$gioitinh','$trangthaiActive')";
       $result = mysqli_query($this->con,$sql);
    }
    public function select_idUser($email){
    	$sql =  "SELECT id_user FROM dbl_user WHERE email='$email'";
       $result = mysqli_query($this->con,$sql);
    }
    public function Update_Active_tk($email){
   
       $sql =  "UPDATE dbl_user SET trangthaiActive= 1 WHERE email='$email'";
       $result = mysqli_query($this->con,$sql);
    }


 }
?> 