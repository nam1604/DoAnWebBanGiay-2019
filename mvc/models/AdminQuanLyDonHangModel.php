<?php 
	
	class AdminQuanLyDonHangModel extends DB
	{

		public function getAll_Donhang()
		{
			$qr = "SELECT * FROM dbl_hoadon ";
		     $result = mysqli_query($this->con,$qr);
		     $mang = array();
		     while($row = mysqli_fetch_array($result)){
		          $mang[]=$row;
		     }
		     return json_encode($mang);
		}

		public function getAll_Donhang_theoUser($email)
		{
			$qr = "SELECT * FROM dbl_hoadon JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user WHERE dbl_user.email = '$email'";
		     $result = mysqli_query($this->con,$qr);
		     $mang = array();
		     while($row = mysqli_fetch_array($result)){
		          $mang[]=$row;
		     }
		     return json_encode($mang);
		}
		public function update_xacnhan($iddonhang){
	       $sql =  "UPDATE dbl_hoadon SET trangthai_dh=1 WHERE id_donhang='$iddonhang'";
	       $result = mysqli_query($this->con,$sql);

	    }
	    public function update_khongxacnhan($iddonhang){
	       $sql =  "UPDATE dbl_hoadon SET trangthai_dh=0 WHERE id_donhang='$iddonhang'";
	       $result = mysqli_query($this->con,$sql);
	    }

	

	
	}
 ?>