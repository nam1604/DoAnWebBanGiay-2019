<?php
class AdminQuanLyLoaiSanPhamModel extends DB{
    
    public function insert_LoaiSanPham($tenloaisp){
        $sql = "INSERT INTO tbl_loaisp(ten_loaisp) values('$tenloaisp')";
        $result = mysqli_query($this->con,$sql);
        $thongbao = '';
        // if($result){
        //     return json_encode($thongbao=''.'loai san pham thanh cong');
        // }else{
        //     return json_encode($thongbap=''.'them that bai');
        // }
    }
    public function update_LoaiSanPham(){

    }
    public function delete_LoaiSanPham(){

    }
    public function listAllLoaiSanPham(){
       $qr = "SELECT * FROM tbl_loaisp ";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
    }

}
?> 