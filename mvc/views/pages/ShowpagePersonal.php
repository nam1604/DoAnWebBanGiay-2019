<?php 
  $chuyenJson_getAllUser = json_decode($data['getAllUser'],true);
 ?>
 <div class="container">
          <div style="text-align: center;"><h3>Trang quản lý người dùng</h3></div>
          <div class="container-quanlyuser">
              <div class="container-quanlyuserleft">
                      <ul class="container-quanlyuserleft-chucnang-ul">
                          <li><a href="">Chào user : <?php  echo $chuyenJson_getAllUser[0]['hoten']; ?></a></li>
                          <li><a href="./HomePersonal/Show_thontinPersonal">Thông tin</a> </li>
                          <li><a href="./HomePersonal/Show_doimatkhau">Đổi mật khẩu</a></li>
                          <li><a href="./HomePersonal/Show_quanlydonhang">Quản lý đơn hàng</a> </li>
                      </ul>
                </div>
              <div class="container-quanlyuserright">
                    <div class="container-form">
                            <div style="width: 100%; text-align:center;"><h3>Chao ban da den trang quan ly nguoi dung</h3></div>
                        
              </div>
          </div>
      </div>