<?php
class AdminQuanLySanPhamModel extends DB{
    
    public function insert_SanPham($tenloaisp){
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
    
    }
