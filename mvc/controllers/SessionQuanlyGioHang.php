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
            echo "co san pham trong gio";
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

   




}
