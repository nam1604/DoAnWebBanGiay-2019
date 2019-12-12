<?php 
	
	class AdminQuanLyDonHangModel extends DB
	{

		public function getAll_Donhang()
		{
			$qr = "SELECT * FROM dbl_hoadon JOIN dbl_chitiet_sp ON dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user JOIN dbl_thanhtoan ON dbl_hoadon.id_donhang = dbl_thanhtoan.id_donhang  JOIN dbl_vanchuyen ON dbl_hoadon.id_donhang = dbl_vanchuyen.id_donhang WHERE dbl_thanhtoan.xacnhan_thanhtoan = 1 AND dbl_hoadon.trangthai_dh=1";
		     $result = mysqli_query($this->con,$qr);
		     $mang = array();
		     while($row = mysqli_fetch_array($result)){
		          $mang[]=$row;
		     }
		     return json_encode($mang);
		}

	

	
	}
 ?>