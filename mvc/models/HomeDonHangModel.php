<?php
class HomeDonHangModel extends DB{
    
    public function insert_Donhang($iduser,$idchitiet,$soluong_sp,$tongtien_dh,$trangthai_dh,$tenSP){
       $sql="INSERT INTO dbl_hoadon(id_user,id_chitiet,soluong_sp,tongtien_dh,trangthai_dh,tensp) VALUES('$iduser','$idchitiet','$soluong_sp','$tongtien_dh','$trangthai_dh','$tenSP')";
       $result = mysqli_query($this->con,$sql);
    }

    public function get_allgiohang($iduser){
      // $sql ="SELECT * FROM dbl_hoadon JOIN dbl_chitiet_sp ON dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user WHERE dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet AND dbl_hoadon.id_user= '$iduser'";
     
    }

    function Giohang($iduser){
      $qr = "SELECT * FROM dbl_hoadon JOIN dbl_chitiet_sp ON dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user WHERE dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet AND dbl_hoadon.id_user= '$iduser' AND dbl_hoadon.id_user = dbl_user.id_user AND dbl_hoadon.trangthai_dh = 0";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
     }

    function Delete_DonHang($idonhang){
        $sql = "DELETE FROM dbl_hoadon WHERE id_donhang = '$idonhang'";
        $result = mysqli_query($this->con,$sql);
    }

    function Getone_DonHang($id_donhang){
       $qr = "SELECT * FROM dbl_hoadon JOIN dbl_chitiet_sp ON dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet JOIN dbl_user ON dbl_hoadon.id_user = dbl_user.id_user WHERE dbl_hoadon.id_chitiet = dbl_chitiet_sp.id_chitiet AND dbl_hoadon.id_user = dbl_user.id_user AND dbl_hoadon.trangthai_dh = 0 AND dbl_hoadon.id_donhang='$id_donhang'";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
    }



    //  thanh toan don hang

    function Insert_ThanhToan($tennguoinhan,$sdtnguoinhan,$diachinguoinhan,$hinhthucthanhtoan,$id_donhang,$xacnhan_thanhtoan){

       $sql="INSERT INTO dbl_thanhtoan(tennguoinhan,sdtnguoinhan,diachinguoinhan,hinhthucthanhtoan,id_donhang,xacnhan_thanhtoan) VALUES('$tennguoinhan','$sdtnguoinhan','$diachinguoinhan','$hinhthucthanhtoan','$id_donhang','$xacnhan_thanhtoan')";
       $result = mysqli_query($this->con,$sql);
    }

    function Update_trangthaiHoaDon($idonhang){
        $sql =  "UPDATE dbl_hoadon SET trangthai_dh= 1 WHERE id_donhang='$idonhang'";
       $result = mysqli_query($this->con,$sql);
    }

      function Update_trangthaithanhtoan($idonhang){
        $sql =  "UPDATE dbl_thanhtoan SET xacnhan_thanhtoan= 1 WHERE id_donhang='$idonhang'";
       $result = mysqli_query($this->con,$sql);
    }



    // van chuyen

     function Insert_Vanchuyen($idonhang){

       $sql="INSERT INTO dbl_vanchuyen(id_donhang,trangthai_vanchuyen) VALUES('$idonhang','0')";
       $result = mysqli_query($this->con,$sql);
    }



 }
?> 