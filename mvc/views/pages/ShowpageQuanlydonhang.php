  <?php 
      $chuyenJson = json_decode($data['alldonhang'],true);
   ?>
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
                <div style="text-align: center;"><h3>Quản lý đơn hàng</h3></div>
                <div class="container-giohang">
                     <table  style="width:100%">
                        <tr>
                            <th style="width: 15%;">Mã Đơn hàng</th>
                            <th style="width: 17%;">Tên sản phẩm</th>
                            <th style="width: 14%;">Tổng tiền</th>
                            <th style="width: 15%;">Trạng thái</th>
                        </tr>
                         <?php 
                           for($i = 0; $i < count($chuyenJson);$i++) {
                          ?>
                        <tr>
                            <td><?php echo  $chuyenJson[$i]['id_donhang'];  ?></td>
                            <td><?php echo  $chuyenJson[$i]['tensp'];  ?></td>
                            <td><?php echo  $chuyenJson[$i]['tongtien_dh'];  ?></td>
                            <?php 
                            if ($chuyenJson[$i]['trangthai_vanchuyen']==0) {
                           ?>
                          <td > <h4 style="color: red; text-align: center;">Đang xử lý</h4></td> 
                          <?php 
                           }else{
                           ?>
                             <td ><h4 style="color:green;text-align: center; ">Đơn hàng hoàn thành</h4></td> 
                            <?php 
                             }  
                            ?>
                        </tr>
                        <?php 
                          }
                        ?>                              
                     </table>
                </div>
          </div>
      </div>
    </div>