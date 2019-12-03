 <div class="container">
      <div style="text-align: center;"><h3>Trang quản lý người dùng</h3></div>
      <div class="container-quanlyuser">
         <div class="container-quanlyuserleft">
                      <ul class="container-quanlyuserleft-chucnang-ul">
                          <li><a href="">Chào user : nam</a></li>
                          <li><a href="./HomePersonal/Show_thontinPersonal">Thông tin</a> </li>
                          <li><a href="./HomePersonal/Show_doimatkhau">Đổi mật khẩu</a></li>
                          <li><a href="./HomePersonal/Show_quanlydonhang">Quản lý đơn hàng</a> </li>
                      </ul>
                </div>
          <div class="container-quanlyuserright">
                <div class="container-form">
                        <div style="width: 100%; text-align:center;"><h3>Thông tin tài khoản</h3></div>
                        <form action="" method="POST" class="container-form-formdangky">
                            <label for="">Ho ten</label>
                            <input name="hoten" type="text">
            
                            <label for="">sdt</label>
                            <input name="sdt" type="text">
            
                            <label for="">email</label>
                            <input name="email" type="email" disabled>
        
                            <label for="">gioitinh</label>
                            <select name="gioitinh">
                              <option value="0">Nam</option>
                              <option value="1">Nữ</option>
                            </select>
            
                           <!--  <div>
                            <label for="">Ngay Sinh</label>
                           <input type="date" name="ngaysinh" >
                            </div> -->
                            <div class="container-form-formdangky-items">
                                <input class="container-form-formdangky-items_input" value="cập nhật" type="submit" style=" width: 70px;">
                                
                            </div>
                        </form>
                    </div>
          </div>
      </div>
    </div>