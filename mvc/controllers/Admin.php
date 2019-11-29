<?php

// http://localhost/live/Home/Show/1/2

class Admin extends Controller{

     public $admin ;
     public function __construct(){
        //model
        $this->admin= $this->model("AdminModel");

     }
    // Must have SayHi()
    function SayHi(){
        
        $this->view("MasterAdmin1", [
            "Mau"=>"red",
            "page"=>"PageAdminDangnhap"
        ]);

    }

    function Show(){        
        // Call Models
        

        // Call Views
        $this->view("MasterAdmin1", [
            "Mau"=>"red"
        ]);
    }
    
}
?>