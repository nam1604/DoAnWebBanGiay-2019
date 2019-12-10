
    <!-- home car -->

<?php 
  
    $chuyenJson_chitietsp = json_decode($data['chitietsanpham'],true);
    $chuyenJson_hinhanh = json_decode($data['hinhanh'],true);
    $chuyenJson_sanPham = json_decode($data['sanPham'],true);

   if (isset($data['allGiohang'])) {
     $chuyenJson_dataGiohang = json_decode($data['allGiohang'],true);
      
    

 ?>
    <div class="container">
        <div  class="container-homecar">
                <div style="text-align: center;"><h3>Giỏ hàng</h3></div>
                <?php 
                  for ($t=0; $t < count($chuyenJson_dataGiohang); $t++){
                 ?> 
                <div class="container-homecar-giohang">
                  <div class="container-homecar-giohang-sp">
                    <div class="Showsanpham-items">
                      <a href="detailsProduct.html" class="Showsanpham-items-stylea">
                         <div class="Showsanpham-items-stylea-picture">
                            <img src="./uploads/<?php 
                       for ($j=0; $j < count($chuyenJson_hinhanh); $j++) { 
                    if ($chuyenJson_dataGiohang[$t]['id_chitiet'] ==$chuyenJson_hinhanh[$j]['id_chitiet'] ) {
                      echo $chuyenJson_hinhanh[$j]['hinhanh'];
                      break;
                    }
                  }
                     ?>" alt="" class="Showsanpham-items-stylea-picture__img">
                        </div>
                        <p class="Showsanpham-items-stylea__title"><?php echo  $chuyenJson_dataGiohang[$t]['tensp']; ?></p>
                      
                      </a>
                    </div>
                   
                  </div >
                  <div class="container-homecar-giohang-soluong">
                      số lượng <input type="text" value="<?php echo  $chuyenJson_dataGiohang[$t]['soluong_sp']; ?>" style="height: 20px; width: 40px; text-align: center;" disabled>
                    
                  </div>
                  <div class="container-homecar-giohang-gia">
                    <h3>Giá</h3> <p><?php echo  $chuyenJson_dataGiohang[$t]['tongtien_dh']; ?> VND</p>
                  </div>
                  <div class="container-homecar-giohang-chucnang">
                        <a href="./HomeDonHang/XoaDonHang/<?php echo $chuyenJson_dataGiohang[$t]['id_donhang']; ?>"><input type="submit" value="xoa" style="width: 50px;background: red; border: 1px solid #eee; border-radius: 5px; cursor: pointer;"></a>
                     
                      <a href="./HomeDonHang/ThanhToan_DonHang/<?php  echo  $chuyenJson_dataGiohang[$t]['id_donhang']; ?>"><input type="button" value="thanh toan" style="padding: 5px; background: green; border: 1px solid #eee; border-radius: 5px; cursor: pointer;"></a>
                  </div>
                </div>
                <?php 
                } 
              ?>
                 
            </div>
                

        </div>
        
    <?php 
      }else{
     ?> 
    <div class="container">
        <div  class="container-homecar">
                <div style="text-align: center;"><h3>Giỏ hàng</h3></div>
                  Bạn chưa có đơn hàng nào hãy đăng nhập
                 
            </div>
        </div>

     <?php 
      }
      ?>

   