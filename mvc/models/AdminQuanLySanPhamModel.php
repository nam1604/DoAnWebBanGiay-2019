<?php
class AdminQuanLySanPhamModel extends DB{
    
    public function insert_SanPham($tenSp,$idLoai){
        $sql = "INSERT INTO dbl_sanpham(tensp,id_loaisp) values('$tenSp','$idLoai')";
        $result = mysqli_query($this->con,$sql);
        $thongbao = '';
        // if($result){
        //     return json_encode($thongbao=''.'loai san pham thanh cong');
        // }else{
        //     return json_encode($thongbap=''.'them that bai');
        // }
    } 

     public function update_SanPham($idSp,$idLoaiSp,$tenSp){
       $sql =  "UPDATE dbl_sanpham SET tensp='$tenSp',id_loaisp='$idLoaiSp' WHERE id_sp='$idSp'";
       $result = mysqli_query($this->con,$sql);
    }


    public function delete_SanPham($idSp){
       $sql = "DELETE FROM dbl_sanpham WHERE id_sp = '$idSp' ";
        $result = mysqli_query($this->con,$sql);
    } 

    public function oneSanPham($idSp){

       $qr = "SELECT * FROM dbl_sanpham JOIN dbl_loaisp on dbl_sanpham.id_loaisp = dbl_loaisp.id_loaisp where id_sp = '$idSp'AND dbl_sanpham.id_loaisp = dbl_loaisp.id_loaisp";
       $result = mysqli_query($this->con,$qr);
    
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
        
    }

    public function listAllSanPham(){
       $qr = "SELECT * FROM dbl_sanpham ,dbl_loaisp where   dbl_sanpham.id_loaisp = dbl_loaisp.id_loaisp";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
    
    }

    public function listAllSanPham_TheoLoai($idLoai){
       $qr = "SELECT * FROM dbl_sanpham ,dbl_loaisp where   dbl_sanpham.id_loaisp = dbl_loaisp.id_loaisp AND  dbl_sanpham.id_loaisp='$idLoai'";
       $result = mysqli_query($this->con,$qr);
       $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
    
    }
  }
