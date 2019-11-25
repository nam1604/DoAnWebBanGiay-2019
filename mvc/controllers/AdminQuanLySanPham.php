<?php
 class AdminQuanLySanPham extends Controller{
     
    public $sanPham ;
    public $loaiSanPham;
    public function __construct(){
        //model
        $this->sanPham= $this->model("AdminQuanLySanPhamModel");
        $this->loaiSanPham=$this->model("AdminQuanLyLoaiSanPhamModel");

     }
   public function showPageSanPham(){
    // Call Views
    $this->view("MasterAdmin1", [
        "page"=>"PageAdminQuanLySanPham",
        "sanpham"=> $this->sanPham ->listAllSanPham(),
        "loaisanpham"=>$this->loaiSanPham->listAllLoaiSanPham()
    ]);
   }
    public function showPageCapNhatSanPham($idSp){

    // Call Views
    $this->view("MasterAdmin1", [
        "page"=>"PageAdminQuanLyCapNhatSanPham",
        "sanpham"=> $this->sanPham ->listAllSanPham(),
        "onesanpham"=>$this->sanPham ->oneSanPham($idSp),
        "loaisanpham"=>$this->loaiSanPham->listAllLoaiSanPham()
    ]);
   }

    public function themSanPham(){
         if (isset($_POST['themsp'])) {
          $tenSp = $_POST['tensp'];
          $idLoaiSp = $_POST['idLoaisp'];
          $this->sanPham-> insert_SanPham($tenSp,$idLoaiSp);
          //call views
          $this->showPageSanPham();  
      }       
        
    }

    public function xoaSanPham($idSp){
      if ($idSp != NULL) {
        $this->sanPham ->delete_SanPham($idSp);

        //call views
        $this->showPageSanPham();
      }
              
        
    }

   public function capNhatSanPham($idSp){
      if ($idSp != NULL) {
       if (isset($_POST['capnhatsp'])) {
          $tenSp = $_POST['tensp'];
          $idLoaiSp = $_POST['idLoaisp'];
          $this->sanPham-> update_SanPham($idSp,$idLoaiSp,$tenSp);
          //call views
         $this->view("MasterAdmin1", [
        "page"=>"PageAdminQuanLySanPham",
        "sanpham"=> $this->sanPham ->listAllSanPham(),
        "loaisanpham"=>$this->loaiSanPham->listAllLoaiSanPham()
    ]);
      }       
      }
            
   }
 }
?>
