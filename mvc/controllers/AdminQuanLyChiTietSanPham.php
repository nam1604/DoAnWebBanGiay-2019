<?php
    class AdminQuanLyChiTietSanPham extends Controller{
        
     
     public function __construct(){
        //model
       

     }

    public function showPageChiTietSanPham(){
    // Call Models
            // Call Views
            $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLyChiTietSanPham",
            ]);
     }

    public function xoaChiTietSanPham(){
            
      
    }

    public function capNhatChiTietSanPham(){
            
      
    }

  

}
    
?>	