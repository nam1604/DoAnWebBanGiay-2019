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
     public function showPageCapNhatLoaiSanPham($idLoaiSp){        
        // Call Models
        // Call Views
        if ($idLoaiSp != NULL) {
            $this->view("MasterAdmin1", [
            "page"=>"PageAdminQuanLyCapNhatLoaiSanPham",
            "loaiSanPham"=>  $this->loaiSanPham ->listAllLoaiSanPham(),
            "oneLoaiSanPham"=> $this->loaiSanPham->oneLoaiSanPham($idLoaiSp)
        ]);
        }
    
    }
         
    function themLoaiSanPham(){
        if(isset($_POST['themloaisp'])){
             $tenloaisp = $_POST['tenloaisp'];
             $this->loaiSanPham ->insert_LoaiSanPham($tenloaisp);
          
             $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLyLoaiSanPham",
                "loaiSanPham"=> $this->loaiSanPham ->listAllLoaiSanPham()
            ]);     
          
         }
      
    }

    function xoaLoaiSanPham($idLoaiSp){
        if ($idLoaiSp != NULL) {
             $this->loaiSanPham ->delete_LoaiSanPham($idLoaiSp);
            echo "$idLoaiSp";
             $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLyLoaiSanPham",
                "loaiSanPham"=> $this->loaiSanPham ->listAllLoaiSanPham()
            ]);     
        }
      
    }
     
    function capnhatLoaiSanPham($idLoaiSp){
        if ($idLoaiSp != NULL) {
            if (isset($_POST['capnhatloaisp'])) {
                $tenloaisp = $_POST['tenloaisp'];
                $this->loaiSanPham ->update_LoaiSanPham($idLoaiSp,$tenloaisp);
                $this->view("MasterAdmin1", [
                    "page"=>"PageAdminQuanLyLoaiSanPham",
                    "loaiSanPham"=> $this->loaiSanPham ->listAllLoaiSanPham()
                ]);     
            }
         
        }
      
    }

   

}
    
?>