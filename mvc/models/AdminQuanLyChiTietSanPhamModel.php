<?php
class AdminQuanLyChiTietSanPhamModel extends DB{
    
    public function insert_ChiTietSanPham($maso_sanpham,$mota,$gia,$idSize,$idsp){
       $sql="INSERT INTO dbl_chitiet_sp(maso_sanpham,mota_sp,gia_sp,id_size,id_sp) VALUES('$maso_sanpham','$mota','$gia','$idSize','$idsp')";
       $result = mysqli_query($this->con,$sql);
    }

    public function update_ChiTietSanPham(){

    }

    public function delete_ChiTietSanPham(){

    }

    public function get_idChiTiet(){
      
        
    }

    public function oneChiTietSanPham(){
      
        
    }

    public function listAllChiTietSanPham(){
      
     

    }


    // xu ly size

    public function get_Size(){
      $sql = "SELECT * FROM dbl_size";
      $result = mysqli_query($this->con,$sql);
      $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    }

    // xu ly hinh anh 
    public function get_HinhAnh(){
      $sql = "SELECT * FROM dbl_anh";
      $result = mysqli_query($this->con,$sql);
      $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    }

    public function insert_HinhAnh($maso_sanpham,$hinhAnh){
    	$sql ="INSERT INTO dbl_anh(maso_sanpham,hinhanh) VALUES('$maso_sanpham','$hinhAnh')";
      	$result = mysqli_query($this->con,$sql);
        
    }

    public function delete_HinhAnh(){
      
        
    }

    // xu ly Mau
    public function get_Mau(){
      $sql = "SELECT * FROM dbl_mau";
      $result = mysqli_query($this->con,$sql);
      $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    } 
    public function insert_Mau($maso_sanpham,$mau){
      $sql="INSERT INTO dbl_mau(maso_sanpham,mau) VALUES('$maso_sanpham','$mau')";
      $result = mysqli_query($this->con,$sql);
        
    }
    public function delete_mau($idMau){
      $sql = "DELETE FROM dbl_mau WHERE id_mau ='$idMau'";
      $result = mysqli_query($this->con,$sql);
    }


}
?> 