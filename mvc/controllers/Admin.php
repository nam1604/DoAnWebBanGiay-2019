<?php

    if(!isset($_SESSION)){
            session_start();
        }

class Admin extends Controller{

    // Must have SayHi()
    public $admin;
    public function __construct(){
        //model
        $this->admin= $this->model("AdminModel");

     }
    function SayHi(){
        
        $this->view("MasterAdmin1", [
            "page"=>"PageAdminDangnhap"
        ]);

    }

    function Show(){        
        // Call Models
         $this->view("MasterAdmin1", [
            "page"=>"PageAdminHome"
        ]);

    }

    function CheckDangNhap_Admin(){
        if (isset($_POST['dangnhapAdmin'])) {
            $username =$_POST['usernameAdmin'];
            $password =$_POST['passwordAdmin'];

            $ketqua = $this->admin ->get_Admin($username,$password);
          
            if ($ketqua != NULL) {
                $_SESSION['usernameAdmin-login']=$username;
                  $this-> Show();

            }else{
                $this-> SayHi();
            }
        }
    }
    function DangXuat_Admin(){
        unset($_SESSION['usernameAdmin-login']);
        $this-> SayHi();
    }
    
}
?>