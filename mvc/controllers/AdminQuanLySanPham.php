<?php
 class AdminQuanLySanPham extends Controller{
     

 public function __construct(){
        //model
       

     }
   public function showPageSanPham(){
    // Call Models
            // Call Views
            $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLySanPham",
            ]);
   }
 }
?>
