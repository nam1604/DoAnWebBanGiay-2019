<?php
    class AdminModel extends DB{
         public function get_Admin($username,$password){
	       $sql = "SELECT * FROM dbl_admin WHERE username_admin='$username' AND password_admin='$password'";
	       $rows = mysqli_query($this->con,$sql);
	       $mang = array();
	       $kq = 0;
           if(mysqli_num_rows($rows) > 0){
              $kq= 1;
           }
           return json_encode($kq);
	    }
    }
   
?>