<?php
class AdminQuanLyLoaiSanPhamModel extends DB{
    
    public function insert_LoaiSanPham($tenloaisp){
        $sql = "INSERT INTO dbl_loaisp(tenloaisp) values('$tenloaisp')";
        $result = mysqli_query($this->con,$sql);
        $thongbao = '';
        // if($result){
        //     return json_encode($thongbao=''.'loai san pham thanh cong');
        // }else{
        //     return json_encode($thongbap=''.'them that bai');
        // }
    }

    public function update_LoaiSanPham($idLoaiSp,$tenloaisp){
       $sql =  "UPDATE dbl_loaisp SET tenloaisp='$tenloaisp' WHERE id_loaisp='$idLoaiSp'";
       $result = mysqli_query($this->con,$sql);
    }

    public function delete_LoaiSanPham($idLoaiSp){
        $sql = "DELETE FROM dbl_loaisp WHERE id_loaisp = '$idLoaiSp' ";
        $result = mysqli_query($this->con,$sql);

    }

    public function oneLoaiSanPham($idLoaiSp){

       $qr = "SELECT * FROM dbl_loaisp where id_loaisp = '$idLoaiSp'";
       $result = mysqli_query($this->con,$qr);
    
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    }
    public function listAllLoaiSanPham(){

       $qr = "SELECT * FROM dbl_loaisp ";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    }

}
?> 