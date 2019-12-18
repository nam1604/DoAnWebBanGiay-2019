
    <!-- home car -->

<?php 
  
    $chuyenJson_chitietsp = json_decode($data['chitietsanpham'],true);
    $chuyenJson_hinhanh = json_decode($data['hinhanh'],true);
    $chuyenJson_sanPham = json_decode($data['sanPham'],true);

   if (isset($_SESSION['giohang'])) {
     $chuyenJson_dataGiohang = $_SESSION['giohang'];
    
      
    

 ?>
    <div class="container">
        <div  class="container-homecar">
                <div style="text-align: center;"><h3>Giỏ hàng</h3></div>
                <?php 
                   foreach ($chuyenJson_dataGiohang as $key => $value){
                 ?> 
                <div class="container-homecar-giohang">
                  <div class="container-homecar-giohang-sp">
                    <div class="Showsanpham-items">
                      <a href="detailsProduct.html" class="Showsanpham-items-stylea">
                         <div class="Showsanpham-items-stylea-picture">
                            <img src="./uploads/<?php 
                       for ($j=0; $j < count($chuyenJson_hinhanh); $j++) { 
                    if ($value['idChitiet'] == $chuyenJson_hinhanh[$j]['id_chitiet'] ) {
                      echo $chuyenJson_hinhanh[$j]['hinhanh'];
                      break;
                    }
                  }
                     ?>" alt="" class="Showsanpham-items-stylea-picture__img">
                        </div>
                        <p class="Showsanpham-items-stylea__title"><?php echo  $value['tenSP']; ?></p>
                      
                      </a>
                    </div>
                   
                  </div >
                  <div class="container-homecar-giohang-soluong">
                      số lượng <input type="text" value="<?php echo  $value['soluongmua']; ?>" style="height: 20px; width: 40px; text-align: center;" disabled>
                    
                  </div>
                  <div class="container-homecar-giohang-gia">
                    <h3>Gia</h3> <p><?php  $tong= $value['gia']*$value['soluongmua']; echo $tong; ?> VND</p>
                  </div>
                  <div class="container-homecar-giohang-chucnang">
                        <a href=""><input type="submit" value="xoa" style="width: 50px;background: red; border: 1px solid #eee; border-radius: 5px; cursor: pointer;"></a>
                     
                      <a href=""><input type="button" value="thanh toan" style="padding: 5px; background: green; border: 1px solid #eee; border-radius: 5px; cursor: pointer;"></a>
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

   