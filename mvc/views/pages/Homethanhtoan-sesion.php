<?php 
  $chuyenJson_chitietsp = json_decode($data['chitietsanpham'],true);
    $chuyenJson_hinhanh = json_decode($data['hinhanh'],true);
    $chuyenJson_sanPham = json_decode($data['sanPham'],true);
    if (isset($data['getone_donhang'])) {
        
        $chuyenJson_getone_donhang = json_decode($data['getone_donhang'],true);

    }
    // code vua moi viet hoi toi
    $getdata = $data['donhang_sp'];
   
 ?>

    <!-- show san pham -->

    <div class="container">
        <div class="container-thanhtoan">
            <div class="container-thanhtoan-left" >
                <div class="container-form">
                    <div style="width: 100%; text-align:center;"><h3>Trang thanh toán</h3></div>
                    <form action="./SessionQuanlyGioHang/thuchien_thanhtoan/<?php echo $getdata['idChitiet']  ?>" method="POST" class="container-form-formdangky">
                        <label for=""></label>Họ tên người nhận</label>
                        <input name="hoten" type="text">
        
                        <label for="">Số điện thoại</label>
                        <input name="sdt" type="text">
        
                        <label for="">Email</label>
                        <input name="email" type="email" value="<?php echo $_SESSION['usernameUser-login'] ?>" disabled>
        
                        <label for="">Địa chỉ</label>
                        <input name="diachi" type="text">
        
                      
                            <h3>Chọn hình thức thanh toán</h3>
                            <label class="container1">Visa / Mastercart
                            <input type="radio" value="0"  name="radio">
                            <span class="checkmark"></span>
                            </label>
                            <label class="container1">Chuyển khoản ATM có Inernet banking
                            <input type="radio" value="1" name="radio">
                            <span class="checkmark"></span>
                            </label>
                            <label class="container1">Ship Code
                            <input type="radio" value="2" name="radio">
                            <span class="checkmark"></span>
                            </label>
                         
        
                      
                        <div class="container-form-formdangky-items">
                            <input class="container-form-formdangky-items_input" name="thuchienthanhtoan" value="Thanh toán" type="submit" style=" width: auto;">
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-thanhtoan-right" >
                <div class="container-homecar-giohang-sp">
                    <div class="Showsanpham-items">
                      <a href="detailsProduct.html" class="Showsanpham-items-stylea">
                         <div class="Showsanpham-items-stylea-picture">
                            <img src="./uploads/<?php 
                       for ($j=0; $j < count($chuyenJson_hinhanh); $j++) { 
                    if ($getdata['idChitiet'] ==$chuyenJson_hinhanh[$j]['id_chitiet'] ) {
                      echo $chuyenJson_hinhanh[$j]['hinhanh'];
                      break;
                    }
                  }
                     ?>" alt="" class="Showsanpham-items-stylea-picture__img">
                        </div>
                        <p class="Showsanpham-items-stylea__title"><?php echo $getdata['tenSP']; ?></p>
                      
                      </a>
                    </div>
                   
                  </div >
                   <div class="container-thanhtoan-right-thongtinspThanhtoan">
                       <p> Số lượng : <?php echo  $getdata['soluongmua']; ?></p>
                        <p>Tổng tiền :  <?php $tong= $getdata['gia']*$getdata['soluongmua']; echo $tong; ?> VNĐ</p>  

                  </div>
                  </div >
                  <!-- thong tin sp thanh toan-->
                 


            </div>
        </div>
    </div>
        
     

