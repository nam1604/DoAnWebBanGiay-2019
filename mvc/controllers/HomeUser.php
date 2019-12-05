<?php

class HomeUser extends Controller{

    public $chiTietSanPham;
    public $loaiSanPham;
    public $sanPham;
    public $hinhAnh;
    public $size;
    public $mausac;
    public $user;

    public function __construct(){
        //model
        $this->chiTietSanPham = $this->model("AdminQuanLyChiTietSanPhamModel");
        $this->loaiSanPham=$this->model("AdminQuanLyLoaiSanPhamModel");
        $this->sanPham= $this->model("AdminQuanLySanPhamModel");
        $this->size = $this->model("AdminQuanLySizeModel");
        $this->hinhAnh = $this->model("AdminQuanLyHinhAnhModel");
        $this->mausac = $this->model("AdminQuanLyMauSacModel");
        $this->user = $this->model("HomeUserModel");
    }

    function Dangky(){
        if (isset($_POST['dangkyUser'])) {
            $hoten=$_POST['hoten'];
            $sdt=$_POST['sdt'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password = md5($password);
            $gioitinh=$_POST['gioitinh'];
            $trangthaiActive=0;
            
            $this->user->insert_user($hoten,$sdt,$email,$password,$gioitinh,$trangthaiActive);
            
            // khai bao chu de gui va noi dung
            $subjects = "Adidas store xac nhan tai khoan !!";
            $body="Chào mừng bạn đã đăng ký tài khoản của chúng tôi. Xin vui lòng Active tai khoản bằng cách nhấp vào link để kích hoạc tài khoản";
            $link="HomeUser/ActiveTaikhoan/".$email;

           

            $this->Mailer($hoten,$email,$subjects,$body,$link);

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

    function ActiveTaikhoan($email){
        $this->user->Update_Active_tk($email);
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


     function Dangnhap(){
         if (isset($_POST['dangnhapUser'])) {
            $username =$_POST['email'];
            $password =$_POST['password'];
            $password = md5($password);

            $ketqua = $this->user ->get_User($username,$password);
            

          
            if ($ketqua == 1) {
                $_SESSION['usernameUser-login']=$username;
                // call views
                 $this->view("MasterPage1", [
                    "page"=>"showAllProduct",
                    "size"=> $this->size->get_Size(),
                    "mausac"=> $this->mausac->get_Mau(),
                    "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                    "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                    "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                    "sanPham"=>$this ->sanPham->listAllSanPham(),
                    "thongbao"=>"đăng nhập thành công"
                ]);

            }else{
                $this->view("MasterPage1", [
                    "page"=>"ShopageLogin",
                    "size"=> $this->size->get_Size(),
                    "mausac"=> $this->mausac->get_Mau(),
                    "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                    "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                    "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                    "sanPham"=>$this ->sanPham->listAllSanPham(),
                    "thongbao"=>"Bạn nhập sai tài khoản hoặc mật khẩu"
                ]);
            }
        }
 
    } 

    function Dangxuat(){
        
        unset($_SESSION['usernameUser-login']);
        // call views
         $this->view("MasterPage1", [
                    "page"=>"showAllProduct",
                    "size"=> $this->size->get_Size(),
                    "mausac"=> $this->mausac->get_Mau(),
                    "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                    "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                    "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                    "sanPham"=>$this ->sanPham->listAllSanPham(),
                    "thongbao"=>"đăng nhập thành công"
                ]);

    } 

    
}
?>