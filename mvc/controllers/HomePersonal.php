<?php
class HomePersonal extends Controller{

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

  

    function Show_thontinPersonal(){
         $this->view("MasterPage1", [
            "page"=>"showpageThongtinPersonal",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);

    }

    function Show_doimatkhau(){
         $this->view("MasterPage1", [
            "page"=>"showpageDoimatkhau",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);

    }

    function Show_quanlydonhang(){
         $this->view("MasterPage1", [
            "page"=>"ShowpageQuanlydonhang",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);

    }

    function Show_donggopykien(){
         $this->view("MasterPage1", [
            "page"=>"ShowpageDonggopykien",
            "size"=> $this->size->get_Size(),
            "mausac"=> $this->mausac->get_Mau(),
            "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
            "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
            "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
            "sanPham"=>$this ->sanPham->listAllSanPham()
        ]);

    }

     function Thoat_user(){
        
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
?>