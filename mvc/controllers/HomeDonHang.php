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

    function ThucHien_ThanhToan_DonHang($idDonhang){

        if (isset($_SESSION['usernameUser-login'])) {
                // luu thong tin vao dbl thanh toan
                if (isset($_POST['thuchienthanhtoan'])) {

                    $hoten =$_POST['hoten'];
                    $sdt =$_POST['sdt'];
                    $diachi =$_POST['diachi'];
                    $radio = $_POST['radio'];
                    $hinhthucthanhtoan;
                    if ($radio==0) {
                        $hinhthucthanhtoan = "Visa/Mastercart";
                    }elseif ($radio==1) {
                         $hinhthucthanhtoan = "Chuyển khoản ATM";
                    }else{
                         $hinhthucthanhtoan = "Ship Code";
                    }


                    $xacnhanthanhtoan =0; 


                $this->donhang->Insert_ThanhToan($hoten,$sdt,$diachi,$radio,$idDonhang,$xacnhanthanhtoan);

                // gui mail xac nhan don hang
                $email= $_SESSION['usernameUser-login'];

                    $subjects = "Adidas store xac nhan Thanh Toan Don Hang !!";
                    $body="Cam on ban da thanh toan online tren Adidas store cua chung toi."."Họ tên:".$hoten."---Số điện thoại :".$sdt."--Địa chỉ giao hàng".$diachi."Hình thức thanh toán".$hinhthucthanhtoan." Xin vui lòng xác nhận thanh toán bằng cách nhấp vào link để xác nhan thanh toán đơn hàng .";
                    $link="HomeDonHang/XacNhanThanhToan/".$idDonhang;

           

            $this->Mailer($hoten,$email,$subjects,$body,$link);

                   
                }

                

                //call views
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

    function XacNhanThanhToan($idDonhang){
      $this->donhang->Update_trangthaithanhtoan($idDonhang);
      $this->donhang->Insert_Vanchuyen($idDonhang);
        $this->donhang->Update_trangthaiHoaDon($idDonhang);

      //call views
       $this->view("MasterPage1", [
                "page"=>"showAllProduct",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "thongbao_thanhtoanThanhcong"=>'Đã xác nhận đơn hàng thành công'
            ]);


    }




}
