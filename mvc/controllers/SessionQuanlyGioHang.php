<?php 

/**
 * 
 */
class SessionQuanlyGioHang extends Controller{

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

    public function Muahang($idChitiet,$gia,$tenSP,$idSp){
      

        if(!isset($_SESSION['giohang']) || $_SESSION['giohang']== null){

              $newproduct = array();
            $newproduct[$idChitiet] = array(
                "idChitiet"=>$idChitiet,
                "gia"=>$gia,
                "tenSP"=>$tenSP,
                "$idSp"=>$idSp,
                "soluongmua"=>1
            );
              $_SESSION['giohang'][$idChitiet]=$newproduct[$idChitiet];
            
        }else{
            
            if (array_key_exists($idChitiet,$_SESSION['giohang'])) {
               $_SESSION['giohang'][$idChitiet]['soluongmua'] += 1;
            }else{
                   $newproduct = array();
                    $newproduct[$idChitiet] = array(
                        "idChitiet"=>$idChitiet,
                        "gia"=>$gia,
                        "tenSP"=>$tenSP,
                        "$idSp"=>$idSp,
                        "soluongmua"=>1
                    );
                    $_SESSION['giohang'][$idChitiet]=$newproduct[$idChitiet];
            }
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


    }
    public function Dathang($idChitiet,$gia,$tenSP,$idSp){
      

        if(!isset($_SESSION['giohang']) || $_SESSION['giohang']== null){

              $newproduct = array();
            $newproduct[$idChitiet] = array(
                "idChitiet"=>$idChitiet,
                "gia"=>$gia,
                "tenSP"=>$tenSP,
                "$idSp"=>$idSp,
                "soluongmua"=>1
            );
              $_SESSION['giohang'][$idChitiet]=$newproduct[$idChitiet];
            
        }else{
            
            if (array_key_exists($idChitiet,$_SESSION['giohang'])) {
               $_SESSION['giohang'][$idChitiet]['soluongmua'] += 1;
            }else{
                   $newproduct = array();
                    $newproduct[$idChitiet] = array(
                        "idChitiet"=>$idChitiet,
                        "gia"=>$gia,
                        "tenSP"=>$tenSP,
                        "$idSp"=>$idSp,
                        "soluongmua"=>1
                    );
                    $_SESSION['giohang'][$idChitiet]=$newproduct[$idChitiet];
            }
        }
         $this->giohang();


    }

    public function giohang(){


                     $this->view("MasterPage1", [
                "page"=>"HomeCartSession",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                
            ]);

    }

    public function xoa_itemsgiohang($idchitiet){

        unset($_SESSION['giohang'][$idchitiet]);

            $this->view("MasterPage1", [
                "page"=>"HomeCartSession",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                
            ]);
    }

    public function thanhtoan($idChitiet){
        if (isset($_SESSION['usernameUser-login'])) {
            
                
                         $this->view("MasterPage1", [
                "page"=>"Homethanhtoan-sesion",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "donhang_sp"=>$_SESSION['giohang'][$idChitiet]

                ]);
             

        }else{
           
               $this->view("MasterPage1", [
                "page"=>"ShopageLogin",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham()
            ]);
        }
    }

    public function thuchien_thanhtoan($idchitiet){
        // buoc nay se luu du lieu vao dbl_hoadon
        
            $idChitietsp = $idchitiet;
            $soluongsp =$_SESSION['giohang'][$idchitiet];
            $tongtien = $_SESSION['giohang'][$idchitiet]['gia'] * $_SESSION['giohang'][$idchitiet]['soluongmua'];
            $tensp = $_SESSION['giohang'][$idchitiet]['tenSP'];
            $trangthai_dh=0;
            $diachi=$_POST['diachi'];
            $sdt = $_POST['sdt'];
            $hinhthuc = $_POST['radio'];
            $xacnhan_donhang = 0;
            $iduser = $this->user->get_AllUser($_SESSION['usernameUser-login']);

            $chuyenjson_iduser = json_decode($iduser,true);
            
            $iduser= $chuyenjson_iduser[0]['id_user'];

        if (isset($_SESSION['usernameUser-login'])){
            $this->donhang->insert_Donhang1($iduser,$idChitietsp,$soluongsp,$tongtien,$trangthai_dh,$tensp,$sdt,$diachi,$hinhthuc,$xacnhan_donhang);

           
        }
    }

   




}
