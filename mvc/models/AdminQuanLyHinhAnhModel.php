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

    public function insert_HinhAnh($maso_sanpham,$hinhAnh){
    	$sql ="INSERT INTO dbl_anh(maso_sanpham,hinhanh) VALUES('$maso_sanpham','$hinhAnh')";
      $result = mysqli_query($this->con,$sql);
        
    }

    public function delete_HinhAnh(){
       //  $sql ="DELETE FROM dbl_anh VALUES('$maso_sanpham','$hinhAnh')";
       // $result = mysqli_query($this->con,$sql);
        
    }


}
?> 