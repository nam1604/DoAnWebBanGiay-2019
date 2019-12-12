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

	
	}

 ?>