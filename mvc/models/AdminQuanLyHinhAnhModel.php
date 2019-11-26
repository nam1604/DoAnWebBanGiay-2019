<?php
class AdminQuanLyHinhAnhModel extends DB{
    
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

    public function insert_HinhAnh($idChiTiet,$hinhAnh){
    	$sql ="INSERT INTO dbl_anh(id_chitiet,hinhanh) VALUES('$idChiTiet','$hinhAnh')";
      $result = mysqli_query($this->con,$sql);
        
    }

    public function delete_HinhAnh($id_Anh){
      $sql= "DELETE FROM products WHERE id_anh='$id_Anh'";
      $result = mysqli_query($this->con,$sql);
        
    }


}
?> 