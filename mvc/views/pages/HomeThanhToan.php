<?php 
    if (isset($data['getone_donhang'])) {
        # code...
        
    }
 ?>

    <!-- show san pham -->

    <div class="container">
        <div class="container-thanhtoan">
            <div class="container-thanhtoan-left" >
                <div class="container-form">
                    <div style="width: 100%; text-align:center;"><h3>Trang thanh toán</h3></div>
                    <form action="" method="POST" class="container-form-formdangky">
                        <label for=""></label>Họ tên người nhận</label>
                        <input name="hoten" type="text">
        
                        <label for="">Số điện thoại</label>
                        <input name="sdt" type="text">
        
                        <label for="">Email</label>
                        <input name="email" type="email" disabled>
        
                        <label for="">Địa chỉ</label>
                        <input name="password" type="text">
        
                      
                            <h3>Chọn hình thức thanh toán</h3>
                            <label class="container1">Visa / Mastercart
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            </label>
                            <label class="container1">Chuyển khoản ATM có Inernet banking
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            </label>
                            <label class="container1">Ship Code
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            </label>
                         
        
                      
                        <div class="container-form-formdangky-items">
                            <input class="container-form-formdangky-items_input" value="Thanh toán" type="submit" style=" width: auto;">
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-thanhtoan-right" >
                <div class="container-homecar-giohang-sp">
                    <div class="Showsanpham-items">
                      <a href="detailsProduct.html" class="Showsanpham-items-stylea">
                        <div class="Showsanpham-items-stylea-picture">
                          <img src="images/alphabouse.jpg" alt="" class="Showsanpham-items-stylea-picture__img">
                        </div>
                        <p class="Showsanpham-items-stylea__title">addiasasdasdasdsadsadsa aphabouseasasdsadasdasddsadsadddddddsadsadsdsadsads</p>
                      
                      </a>
                    </div>
                  </div >
                  <!-- thong tin sp thanh toan-->
                  <div class="container-thanhtoan-right-thongtinspThanhtoan">
                       <p> so luong:5</p>
                        <p>tong tien:6000000</p>  

                  </div>


            </div>
        </div>
    </div>
        
     

