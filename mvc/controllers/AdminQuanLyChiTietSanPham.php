<?php
    class AdminQuanLyChiTietSanPham extends Controller{

        public $chiTietSanPham;
        public $loaiSanPham;
        public $sanPham;

        public function __construct(){
            //model
            $this->chiTietSanPham = $this->model("AdminQuanLyChiTietSanPhamModel");
            $this->loaiSanPham=$this->model("AdminQuanLyLoaiSanPhamModel");
            $this->sanPham= $this->model("AdminQuanLySanPhamModel");
         }

        public function showPageChiTietSanPham($idSp){
            // Call Models
            // Call Views
             $this->view("MasterAdmin1", [
            "page"=>"PageAdminQuanLyChiTietSanPham",
            "sanpham"=>$this->sanPham->oneSanPham($idSp),
            "size"=> $this->chiTietSanPham->get_Size()
            ]);
         }
         public function themChiTietSanPham(){
            if (isset($_POST['themchitietsp'])) {
                // get data tu form
                $maso_sanpham = $_POST['masanpham'];
                $idsp = $_POST['idsp'];
                $gia = $_POST['gia'];
                $mau = $_POST['mau'];
                $idsize = $_POST['idsize'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                //  xu ly chi tiet
                 $this->chiTietSanPham->insert_ChiTietSanPham($maso_sanpham,$mota,$gia,$idsize,$idsp);
                //  xu ly mau sac
                 $this->chiTietSanPham->insert_Mau($maso_sanpham,$mau);

                // xu ly hinh anh
               
                $i=0;
                
                foreach($_FILES['file']['name'] as $i => $name){
                    $name= $_FILES['file']['name'][$i];
                    $type= $_FILES['file']['type'][$i];
                    $size= $_FILES['file']['size'][$i];
                    $tmp= $_FILES['file']['tmp_name'][$i];
                    
                    //tách đuôi
                    $explode= explode('.',$name);
                    $ex= end($explode);
                    $path='mvc/uploads';
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
                           $this->chiTietSanPham->insert_HinhAnh($maso_sanpham,$hinhanhsp);
                          
                        }
                     }
                }

   
            }
         }

        public function xoaChiTietSanPham(){
                 
          
        }

        public function capNhatChiTietSanPham(){
                
          
        }


      

    }
?>	