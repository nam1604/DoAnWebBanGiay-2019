<?php

class Home extends Controller{

    public $chiTietSanPham;
    public $loaiSanPham;
    public $sanPham;
    public $hinhAnh;
    public $size;
    public $mausac;

    public function __construct(){
        //model
        $this->chiTietSanPham = $this->model("AdminQuanLyChiTietSanPhamModel");
        $this->loaiSanPham=$this->model("AdminQuanLyLoaiSanPhamModel");
        $this->sanPham= $this->model("AdminQuanLySanPhamModel");
        $this->size = $this->model("AdminQuanLySizeModel");
        $this->hinhAnh = $this->model("AdminQuanLyHinhAnhModel");
        $this->mausac = $this->model("AdminQuanLyMauSacModel");
    }

    function SayHi(){
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

    function ShowSanPham_TheoLoai($idLoai){        
        // Call Models

        // Call Views
         $this->view("MasterPage1", [
            "page"=>"ShowSanPham_TheoLoai",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham_TheoLoai($idLoai),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham_TheoLoai($idLoai)
        ]);
    }

    function ShowSanPham_details($idChiTietSp,$idSp){

         $this->view("MasterPage1", [
            "page"=>"detailProduct",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->oneChiTietSanPham($idChiTietSp),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "listAllChiTietSanPham_theosanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham_theosanpham($idSp),
            "idSp"=> $idSp
            
        ]);
    }

    function Select_Mausac($idmau,$idSp){
        //tim kiem tung chi chi tiet theo sản phâm rồi so sánh sp đó lấy láy id_mau trùng vs them số $id_mau, lay ra id_chitietdautien
        //b1: lay all chi tiet san pham theo loai
        $chiTietSanPham_theosp = $this ->chiTietSanPham->listAllChiTietSanPham_theosanpham($idSp);
        $chuyenJson_chiTietSanPham_theosp = json_decode($chiTietSanPham_theosp,true);
        $id_chitiet_sp_cantimmau;
        // b2 : kiem id mau trong list
        for ($i=0; $i < count($chuyenJson_chiTietSanPham_theosp) ; $i++) { 
            if ($chuyenJson_chiTietSanPham_theosp[$i]['id_mau'] == $idmau ) {
                $id_chitiet_sp_cantimmau = $chuyenJson_chiTietSanPham_theosp[$i]['id_chitiet'] ;
                break;
            }
        }

        $this->ShowSanPham_details($id_chitiet_sp_cantimmau,$idSp);
  
    }

    function Show_personal(){
         $this->view("MasterPage1", [
            "page"=>"ShowpagePersonal",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);

    }

    function Show_login(){
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

    function Show_register(){
         $this->view("MasterPage1", [
            "page"=>"showpageRegister",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);

    }


   

}
?>