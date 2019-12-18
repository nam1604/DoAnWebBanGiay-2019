<?php 
	

	class AdminQuanLyDonHang extends Controller
	{
		 
		 public $donhang;
		
 

		function __construct()
		{
			
			$this->donhang = $this->model('AdminQuanLyDonHangModel');

		
		}

		function ShowPageVanChuyen(){
			
			     $this->view("MasterAdmin1", [
            "page"=>"PageAdminQuanLyDonHang",
            "alldonhang"=>$this->donhang->getAll_Donhang()
        ]);

		}

		function update_xacnhan($idonhang){
			$this->donhang->update_xacnhan($idonhang);
			     $this->view("MasterAdmin1", [
            "page"=>"PageAdminQuanLyDonHang",
            "alldonhang"=>$this->donhang->getAll_Donhang()
        ]);

		}
		function update_khongxacnhan($idonhang){
			$this->donhang->update_khongxacnhan($idonhang);
			     $this->view("MasterAdmin1", [
            "page"=>"PageAdminQuanLyDonHang",
            "alldonhang"=>$this->donhang->getAll_Donhang()
        ]);

		}


	
	}

 ?>