<?php 
	

	class AdminQuanLyVanChuyen extends Controller
	{
		 public	$vanchuyen; 
		
 

		function __construct()
		{
			$this->vanchuyen = $this->model('VanChuyenModel');
		
		}

		function ShowPageVanChuyen(){
			
			     $this->view("MasterAdmin1", [
            "page"=>"pageAdminVanChuyen",
            "vanchuyen"=>$this->vanchuyen->getAll_vanchuyen()
        ]);

		}

		function Xacnhan_vanchuyen($idvanchuyen){

			$this->vanchuyen->updateTrangthai_vanchuyen($idvanchuyen);
			$this->ShowPageVanChuyen();
				
		}

	}

 ?>