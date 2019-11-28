<?php
    class AdminQuanLyChiTietSanPham extends Controller{

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

        public function showPageChiTietSanPham($idSp){
            // Call Models
            // Call Views
             $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLyChiTietSanPham",
                "sanpham"=>$this->sanPham->oneSanPham($idSp),
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham_theosanpham($idSp),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh()
            ]);
            
         }

         public function showPageCapNhatChiTietSanPham($idSp,$idChiTiet){
            // Call Models
            // Call Views
             $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLyCapNhatChiTietSanPham",
                "sanpham"=>$this->sanPham->oneSanPham($idSp),
                "oneChiTietSanPham"=> $this->chiTietSanPham ->oneChiTietSanPham($idChiTiet),
                "size"=> $this->size->get_Size(),
                "mausac"=> $this->mausac->get_Mau(),
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham_theosanpham($idSp),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh()
            ]);
            
         }

        public function showPageThemHinhAnh($idChiTiet,$idSP){
            // Call Models
            // Call Views
             $this->view("MasterAdmin1", [
                "page"=>"PageAdminQuanLyThemHinhAnh", 
                "idchitiet"=>$idChiTiet,
                "idSp"=>$idSP,
                "chitietsanpham"=> $this ->chiTietSanPham->listAllChiTietSanPham_theosanpham($idSP),
                "hinhanh"=>$this ->hinhAnh->get_HinhAnh(),
                "sanpham"=>$this->sanPham->oneSanPham($idSP)
            ]);
         }


        public function themChiTietSanPham(){
            if (isset($_POST['themchitietsp'])) {
                // get data tu form
                $idsp = $_POST['idsp'];
                $maso_sanpham = $_POST['masanpham'];
                $gia = $_POST['gia'];
                $idMau = $_POST['mau'];
                $idsize = $_POST['idsize'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];

                // them du dieu vao dtb
                $this->chiTietSanPham ->insert_ChiTietSanPham($idsp,$maso_sanpham,$gia,$idMau,$idsize,$soluong,$mota);
                // call views
                $this->showPageChiTietSanPham($idsp);
            }
         }

        public function themHinhAnh(){
              
            //get data hình
            
            if (isset($_POST['themhinh'])) {
                $idchitiet = $_POST['idchitiet'];
                $idsp = $_POST['idsp'];

                  $i=0;      
                foreach($_FILES['file']['name'] as $i => $name){
                    $name= $_FILES['file']['name'][$i];
                    $type= $_FILES['file']['type'][$i];
                    $size= $_FILES['file']['size'][$i];
                    $tmp= $_FILES['file']['tmp_name'][$i];
                    
                    //tách đuôi
                    $explode= explode('.',$name);
                    $ex= end($explode);
                    $path='./uploads/';
                    
                    $path=$path . basename($explode[0].time().'.'.$ex);
                    $hinhanhsp= basename($explode[0].time().'.'.$ex);
                    $thongbao=array();
                            
                    if(empty($tmp)){
                        echo $thongbao[]='Hay chon 1 file!';
                    }else{
                        $chophep=array('jpg','img','gif');
                        $max_size=400000000;
                        if(in_array($ex,$chophep) === false){
                            echo $thongbao[]='File nhu ...';
                        }else if($size > $max_size){
                            echo $thongbao[]='File to vay a....';
                        }
                    }if(empty($thongbao)){
                        if(!file_exists('uploads')){
                            mkdir('uploads',0777);
                        }
                        if(move_uploaded_file($tmp,$path)){
                           $this->hinhAnh->insert_HinhAnh($idchitiet,$hinhanhsp);
                          
                        }
                     }
                }
                  // Call Views
             $this->showPageChiTietSanPham($idsp);   
            }
         }

        public function xoaHinhAnh($idSp,$idHinh){
                 
                 $this->hinhAnh ->delete_HinhAnh($idHinh);

                  $this->showPageChiTietSanPham($idSp);
        }
        
        public function xoaChiTietSanPham($idSp,$idChiTiet){
                 
                 $this->hinhAnh ->delete_AllHinhAnh($idChiTiet);
                 $this->chiTietSanPham ->delete_ChiTietSanPham($idChiTiet);

                return $this->showPageChiTietSanPham($idSp);
        }

        public function capNhatChiTietSanPham($idChiTiet){
            if ($idChiTiet != NULL) {
                    if (isset($_POST['capnhatchitietsp'])) {
                        // get data tu form
                        $idsp = $_POST['idsp'];
                        $maso_sanpham = $_POST['masanpham'];
                        $gia = $_POST['gia'];
                        $idMau = $_POST['mau'];
                        $idsize = $_POST['idsize'];
                        $soluong = $_POST['soluong'];
                        $mota = $_POST['mota'];

                        // them du dieu vao dtb
                        $this->chiTietSanPham ->update_ChiTietSanPham($idChiTiet,$maso_sanpham,$gia,$idMau,$idsize,$soluong,$mota);
                        // call views
                        $this->showPageChiTietSanPham($idsp);
                }
            }  
          
        }


      

    }
?>	