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

    function xuLyDonHang($idChitiet,$gia,$tenSP,$idSp){

		if (isset($_SESSION['usernameUser-login'])) {
						//tao don hang
	    	//tao don hang
	    	$idChitietsp = $idChitiet;
	    	$soluongsp =$_POST['soluong'];
	    	$tongtien = $soluongsp * $gia;
	    	$tensp = $tenSP;
	    	$trangthai_dh=0;
	    	$iduser = $this->user->get_AllUser($_SESSION['usernameUser-login']);

	    	$chuyenjson_iduser = json_decode($iduser,true);
	    	
	    	$iduser= $chuyenjson_iduser[0]['id_user'];

 

	    	if (isset($_POST['themgiohang'])){
	    		
			
				$this->donhang->insert_Donhang($iduser,$idChitietsp,$soluongsp,$tongtien,$trangthai_dh,$tensp);
	

            //              $this->view("MasterPage1", [
            //     "page"=>"HomeCart",
            //     "size"=> $this->size->get_Size(),
            //     "mausac"=> $this->mausac->get_Mau(),
            //     "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            //     "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            //     "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            //     "sanPham"=>$this ->sanPham->listAllSanPham(),
            //      "allGiohang"=> $this->donhang->Giohang($iduser)
            // ]);

                 $this->view("MasterPage1", [
            "page"=>"detailProduct",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->oneChiTietSanPham($idChitiet),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "listAllChiTietSanPham_theosanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham_theosanpham($idSp),
            "idSp"=> $idSp,
            "thongbaoGiohang"=>"Đã thêm thành công sản phẩm"
            
        ]);

	    		
	    	}elseif (isset($_POST['thanhtoan'])){
	    		
	    		$this->donhang->insert_Donhang($iduser,$idChitietsp,$soluongsp,$tongtien,$trangthai_dh,$tensp);

	    		
                
                         $this->view("MasterPage1", [
                "page"=>"HomeCart",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "allGiohang"=> $this->donhang->Giohang($iduser)
            ]);

	    	}


	
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

    function XoaDonHang($idDonhang){
    	$this->donhang->Delete_DonHang($idDonhang);
    	        if (isset($_SESSION['usernameUser-login'])) {
            // lay user id
    	     // call view showHomecar
         $iduser = $this->user->get_AllUser($_SESSION['usernameUser-login']);
            $chuyenjson_iduser = json_decode($iduser,true); 
            $iduser= $chuyenjson_iduser[0]['id_user'];
            // lay tat ca du lieu gio hang 
            // call views
             $this->view("MasterPage1", [
            "page"=>"HomeCart",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham(),
            "allGiohang"=> $this->donhang->Giohang($iduser)
        ]);

        }else{ 
            $this->view("MasterPage1", [
            "page"=>"HomeCart",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);
        }
    	
    }

    function ThanhToan_DonHang($idDonhang){

        if (isset($_SESSION['usernameUser-login'])) {
            
                echo "da vao toitrang thanh toan  thanh toan";
                         $this->view("MasterPage1", [
                "page"=>"HomeThanhToan",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "getone_donhang"=>$this->donhang->Getone_DonHang($idDonhang)

                ]);
             

        }else{
           
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
