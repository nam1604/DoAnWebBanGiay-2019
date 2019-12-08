<?php 

/**
 * 
 */
class HomeDonHang extends Controller{

    public $chiTietSanPham;
    public $loaiSanPham;
    public $sanPham;
    public $hinhAnh;
    public $size;
    public $mausac;
    public $user;
    public $donhang;

    public function __construct(){
        //model
        $this->chiTietSanPham = $this->model("AdminQuanLyChiTietSanPhamModel");
        $this->loaiSanPham=$this->model("AdminQuanLyLoaiSanPhamModel");
        $this->sanPham= $this->model("AdminQuanLySanPhamModel");
        $this->size = $this->model("AdminQuanLySizeModel");
        $this->hinhAnh = $this->model("AdminQuanLyHinhAnhModel");
        $this->mausac = $this->model("AdminQuanLyMauSacModel");
        $this->user = $this->model("HomeUserModel");
        $this->donhang =$this->model("HomeDonHangModel");
    }

    function xuLyDonHang($idChitiet,$gia){

		if (isset($_SESSION['usernameUser-login'])) {
						//tao don hang
	    	//tao don hang
	    	$idChitietsp = $idChitiet;
	    	$soluongsp =$_POST['soluong'];
	    	$tongtien = $soluongsp * $gia;
	    	$trangthai_dh=0;
	    	$iduser = $this->user->Check_emailAjax($_SESSION['usernameUser-login']);


	    	if (isset($_POST['themgiohang'])){
	    		
			
				$this->donhang->insert_Donhang($iduser,$idChitietsp,$soluongsp,$tongtien,$trangthai_dh);
				echo "da vao toi gio hang";

	    		
	    	}elseif (isset($_POST['thanhtoan'])){
	    		$trangthai_dh=1;
	    		$this->donhang->insert_Donhang($iduser,$idChitietsp,$soluongsp,$tongtien,$trangthai_dh);
	    		echo "da vao toi thanh toan";

	    	}


	         $this->view("MasterPage1", [
	            "page"=>"showAllProduct",
	            "size"=> $this->size->get_Size(),
	            "mausac"=> $this->mausac->get_Mau(),
	            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
	            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
	            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
	            "sanPham"=>$this ->sanPham->listAllSanPham()
	        ]);
		}else{
			echo "them that bai";
			   $this->view("MasterPage1", [
                "page"=>"showAllProduct",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham()
            ]);
		}
    } 

}
