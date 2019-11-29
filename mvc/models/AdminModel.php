<?php
    class AdminModel extends DB{
         public function get_Admin($username,$password){
	       $sql = "SELECT * FROM dbl_admin WHERE username_admin='$username' AND password_admin='$password'";
	       $result = mysqli_query($this->con,$sql);
	       $mang = array();
	       while($row = mysqli_fetch_array($result)){
	           $mang[]=$row;
	       }
	       return json_encode($mang);
	    }
    }
?>