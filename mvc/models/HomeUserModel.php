<?php
class HomeUserModel extends DB{
    
    public function insert_user($hoten,$sdt,$email,$password,$gioitinh,$trangthaiActive){
       $sql="INSERT INTO dbl_user(hoten,sdt,email,password,gioitinh,trangthaiactive) VALUES('$hoten','$sdt','$email','$password','$gioitinh','$trangthaiActive')";
       $result = mysqli_query($this->con,$sql);
    }
    
    public function Update_Active_tk($email){
   
       $sql =  "UPDATE dbl_user SET trangthaiActive= 1 WHERE email='$email'";
       $result = mysqli_query($this->con,$sql);
    }

    public function get_User($username,$password){
         $sql = "SELECT * FROM dbl_user WHERE email='$username' AND password='$password'AND trangthaiActive = 1";
         $rows = mysqli_query($this->con,$sql);
      
        $kq = 0;
           if(mysqli_num_rows($rows) > 0){
              $kq= 1;
           }
           return json_encode($kq);
     }

    public function Check_emailAjax($email){
        $sql =  "SELECT id_user FROM dbl_user WHERE email='$email'";
        $rows = mysqli_query($this->con,$sql);

        $kq = 0;
           if(mysqli_num_rows($rows) > 0){
              $kq= 1;
           }
           return json_encode($kq);
    }

    

    public function get_AllUser($email){
        $sql = "SELECT * FROM dbl_user WHERE email='$email'";
        $result = mysqli_query($this->con,$sql);

        $mang = array();
         while($row =mysqli_fetch_array($result)){
             $mang[]=$row;
         }
         return json_encode($mang);
    }

    public function capnhat_user($idUser,$hoten,$sdt,$gioitinh){
   
       $sql =  "UPDATE dbl_user SET hoten= '$hoten' , sdt= '$sdt', gioitinh= '$gioitinh' WHERE id_user='$idUser'";
       $result = mysqli_query($this->con,$sql);
    }

    public function update_password($iduser,$password){
      $sql = "UPDATE dbl_user SET password='$password' WHERE id_user='$iduser'";
      $result = mysqli_query($this->con,$sql);
    }

   

 }
?> 