<?php
class HomePersonal extends Controller{

    public $chiTietSanPham;
    public $loaiSanPham;
    public $sanPham;
    public $hinhAnh;
    public $size;
    public $mausac;
    public $user;
    public $donhang;

    public function __construct(){
        //model
        $this->chiTietSanPham = $this->model("AdminQuanLyChiTietSanPhamModel");
        $this->loaiSanPham=$this->model("AdminQuanLyLoaiSanPhamModel");
        $this->sanPham= $this->model("AdminQuanLySanPhamModel");
        $this->size = $this->model("AdminQuanLySizeModel");
        $this->hinhAnh = $this->model("AdminQuanLyHinhAnhModel");
        $this->mausac = $this->model("AdminQuanLyMauSacModel");
        $this->user = $this->model("HomeUserModel");
        $this->donhang = $this->model('AdminQuanLyDonHangModel');
    }

  

    function Show_thontinPersonal(){
        if (isset($_SESSION['usernameUser-login'])) {
                
                 $this->view("MasterPage1", [
                "page"=>"showpageThongtinPersonal",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "getAllUser"=>$this->user->get_AllUser($_SESSION['usernameUser-login']),

            ]);
        }else{
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

    function Show_doimatkhau(){
        if (isset($_SESSION['usernameUser-login'])) {
                  $this->view("MasterPage1", [
                "page"=>"showpageDoimatkhau",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "getAllUser"=>$this->user->get_AllUser($_SESSION['usernameUser-login']),
            ]);
        }else{
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

    function Show_quanlydonhang(){


        if (isset($_SESSION['usernameUser-login'])) {
                $this->view("MasterPage1", [
                "page"=>"ShowpageQuanlydonhang",
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                "sanPham"=>$this ->sanPham->listAllSanPham(),
                "getAllUser"=>$this->user->get_AllUser($_SESSION['usernameUser-login']),
                "alldonhang"=>$this->donhang->getAll_Donhang_theoUser($_SESSION['usernameUser-login']) 
            ]);
        }else{
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
    }

    function CapNhatUser($idUser){
        if (isset($_POST['capnhatUser'])) {
            $hoten = $_POST['hoten'];
            $sdt =$_POST['sdt'];
            $gioitinh =$_POST['gioitinh'];

            $this->user->capnhat_user($idUser,$hoten,$sdt,$gioitinh);

            $this->Show_thontinPersonal();



        }
    }

     function Capnhatpassword($idUser){
        if (isset($_POST['capnhatpassword'])) {

            $passwordold = $_POST['passwordold'];
            $username = $_POST['email'];

            $passwordold = md5($passwordold);
            $ketqua = $this->user ->get_User($username,$passwordold);
            $passwordnew0 = $_POST['passwordnew0'];
           

            $passwordnew1 = $_POST['passwordnew1'];
          

            if ($ketqua == 1) {

                if ($passwordnew0 == $passwordnew1) {
                     $passwordnew0 = md5($passwordnew0);
                    // call views
                    $this->user->update_password($idUser,$passwordnew0);
                 $this->view("MasterPage1", [
                    "page"=>"showpageDoimatkhau",
                    "size"=> $this->size->get_Size(),
                    "mausac"=> $this->mausac->get_Mau(),
                    "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                    "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                    "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                    "sanPham"=>$this ->sanPham->listAllSanPham(),
                    "getAllUser"=>$this->user->get_AllUser($_SESSION['usernameUser-login']),
                    "thongbao"=>"Đổi mật khẩu thành công"
                ]);
                }else{
                     $this->view("MasterPage1", [
                    "page"=>"showpageDoimatkhau",
                    "size"=> $this->size->get_Size(),
                    "mausac"=> $this->mausac->get_Mau(),
                    "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                    "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                    "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                    "sanPham"=>$this ->sanPham->listAllSanPham(),
                    "getAllUser"=>$this->user->get_AllUser($_SESSION['usernameUser-login']),
                    "thongbao"=>"Mật khẩu mới không trùng nhau.!!! "
                    ]);
                }

               } else{
                         $this->view("MasterPage1", [
                    "page"=>"showpageDoimatkhau",
                    "size"=> $this->size->get_Size(),
                    "mausac"=> $this->mausac->get_Mau(),
                    "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham(),
                    "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                    "loaisanpham"=> $this ->loaiSanPham->listAllLoaiSanPham(),
                    "sanPham"=>$this ->sanPham->listAllSanPham(),
                    "getAllUser"=>$this->user->get_AllUser($_SESSION['usernameUser-login']),
                    "thongbao"=>"Mật khẩu tài khoản bạn sai. !!!"
                    ]);
                }

        }
    }

    

}
?>