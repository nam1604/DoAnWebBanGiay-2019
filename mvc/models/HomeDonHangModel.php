<?php
class HomeDonHangModel extends DB{
    
    public function insert_Donhang($iduser,$idchitiet,$soluong_sp,$tongtien_dh,$trangthai_dh){
       $sql="INSERT INTO dbl_hoadon(id_uer,id_chitiet,soluong_sp,tongtien_dh,trangthai_dh) VALUES('$iduser','$idchitiet','$soluong_sp','$tongtien_dh','$trangthai_dh')";
       $result = mysqli_query($this->con,$sql);
    }

    public function get_allgiohang($iduser){
      // $sql ="SELECT * FROM dbl_hoadon JOIN dbl_chitiet_sp ON dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user WHERE dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet AND dbl_hoadon.id_user= '$iduser'";
     
    }
// dang lam toi day
    function Giohang($iduser){
      $qr = "SELECT * FROM dbl_hoadon JOIN dbl_chitiet_sp ON dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user WHERE dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet AND dbl_hoadon.id_user= '$iduser'";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
     }
 }
?> 