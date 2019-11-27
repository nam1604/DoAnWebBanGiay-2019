<?php
class AdminQuanLyChiTietSanPhamModel extends DB{
    
    public function insert_ChiTietSanPham($idsp,$maso_sanpham,$gia,$idMau,$idsize,$soluong,$mota){
       $sql="INSERT INTO dbl_chitiet_sp(id_sp,maso_sanpham,gia_sp,id_mau,id_size,soluong,mota_sp) VALUES('$idsp','$maso_sanpham','$gia','$idMau','$idsize','$soluong','$mota')";
       $result = mysqli_query($this->con,$sql);
    }

    public function update_ChiTietSanPham($idChiTietsp,$maso_sanpham,$gia,$idMau,$idsize,$soluong,$mota){
       $sql =  "UPDATE dbl_chitiet_sp SET maso_sanpham='$maso_sanpham', gia_sp='$gia',id_mau='$idMau',id_size='$idsize',soluong='$soluong',mota_sp='$mota' WHERE id_chitiet='$idChiTietsp'";
       $result = mysqli_query($this->con,$sql);

    }

    public function delete_ChiTietSanPham($idChiTietsp){
       $sql= "DELETE FROM dbl_chitiet_sp WHERE id_chitiet='$idChiTietsp'";
       $result = mysqli_query($this->con,$sql);
        
    }

    public function get_idChiTiet(){
      
        
    }

    public function oneChiTietSanPham($idChiTiet){
        $sql = "SELECT * FROM dbl_chitiet_sp JOIN dbl_sanpham ON dbl_chitiet_sp.id_sp = dbl_sanpham.id_sp JOIN dbl_size ON dbl_chitiet_sp.id_size = dbl_size.id_size JOIN dbl_mau ON dbl_chitiet_sp.id_mau = dbl_mau.id_mau WHERE dbl_chitiet_sp.id_sp = dbl_sanpham.id_sp AND dbl_chitiet_sp.id_size = dbl_size.id_size AND dbl_chitiet_sp.id_mau = dbl_mau.id_mau AND dbl_chitiet_sp.id_chitiet = '$idChiTiet'";
      $result = mysqli_query($this->con,$sql);
      $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    }

    public function listAllChiTietSanPham(){
      
      $sql = "SELECT * FROM dbl_chitiet_sp JOIN dbl_sanpham ON dbl_chitiet_sp.id_sp = dbl_sanpham.id_sp JOIN dbl_size ON dbl_chitiet_sp.id_size = dbl_size.id_size JOIN dbl_mau ON dbl_chitiet_sp.id_mau = dbl_mau.id_mau WHERE dbl_chitiet_sp.id_sp = dbl_sanpham.id_sp AND dbl_chitiet_sp.id_size = dbl_size.id_size AND dbl_chitiet_sp.id_mau = dbl_mau.id_mau";
      $result = mysqli_query($this->con,$sql);
      $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);

    }


}
?> 