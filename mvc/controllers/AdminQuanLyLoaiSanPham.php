<?php
    class AdminQuanLyLoaiSanPham extends Controller{
        
     public $loaiSanPham ;
     public function __construct(){
        //model
        $this->loaiSanPham= $this->model("AdminQuanLyLoaiSanPhamModel");

     }
 
    public function showPageLoaiSanPham(){        
        // Call Models
        // Call Views

        $this->view("MasterAdmin1", [
            "page"=>"PageAdminQuanLyLoaiSanPham",
            "loaiSanPham"=> $this->loaiSanPham ->listAllLoaiSanPham()
        ]);
    }
        
    function themLoaiSanPham(){
             if(isset($_POST['themloaisp'])){
                 $tenloaisp = $_POST['tenloaisp'];
                 $this->loaiSanPham ->insert_LoaiSanPham($tenloaisp);
              
                 $this->view("MasterAdmin1", [
                    "page"=>"PageAdminQuanLyLoaiSanPham",
                    "loaiSanPham"=> $this->loaiSanPham ->listAllLoaiSanPham(),
                ]);     
              
             }
      
    }

}
    
?>