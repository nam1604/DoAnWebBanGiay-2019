<?php 
  $chuyenJson_getAllUser = json_decode($data['getAllUser'],true);
 ?>
 <div class="container">
      <div style="text-align: center;"><h3>Trang quản lý người dùng</h3></div>
      <div class="container-quanlyuser">
           <div class="container-quanlyuserleft">
                    <ul class="container-quanlyuserleft-chucnang-ul">
                          <li><a href="">Chào user :<?php  echo $chuyenJson_getAllUser[0]['hoten']; ?></a></li>
                          <li><a href="./HomePersonal/Show_thontinPersonal">Thông tin</a> </li>
                          <li><a href="./HomePersonal/Show_doimatkhau">Đổi mật khẩu</a></li>
                          <li><a href="./HomePersonal/Show_quanlydonhang">Quản lý đơn hàng</a> </li>
                      </ul>
                </div>
          <div class="container-quanlyuserright">
                <div class="container-form">
                        <div style="width: 100%; text-align:center;"><h3>Trang đổi mật khẩu</h3></div>
                        <div style="width: 100%;"><h3><?php if (isset($data['thongbao'])) {
                          echo $data['thongbao'];
                        } ?></h3>
                        </div>
                        <form action="./HomePersonal/Capnhatpassword/<?php echo $chuyenJson_getAllUser[0]['id_user']; ?>" method="POST" class="container-form-formdangky">
            
        
                            <label for="">Mật khẩu cũ</label>
                            <input name="passwordold" type="password" placeholder=" mật khẩu">
                            <input type="text" name="email" value="<?php echo $chuyenJson_getAllUser[0]['email']; ?>" hidden>

                            <label for="">Mật khẩu mới </label>
                            <input name="passwordnew0" type="password" placeholder=" mật khẩu">

                            <label for="">Nhập lạiMật khẩu</label>
                            <input name="passwordnew1" type="password" placeholder=" mật khẩu">
                        
                            <div class="container-form-formdangky-items">
                                <input class="container-form-formdangky-items_input"  value="cập nhật" name="capnhatpassword" type="submit" style=" width: 70px;">
                                
                            </div>
                        </form>
                    </div>
          </div>
      </div>
    </div>