  <?php 
          $chuyenJson = json_decode($data['vanchuyen'],true);

  
   ?>
 <main class="Main">
        <h1> Đây trang Quản lý vận chuyển</h1>
  
            <div class="Main-loaisanpham-Showloaisanpham" style="padding: 10px;">
                <table id="t01" style="width:100%">
                    <tr>
                      <th style="width: 35%;">ID-Vận chuyển</th>
                      <th style="width: 35%;">ID-Đơn hàng</th> 

                      <th style="width: 35%;">Xác nhận vận chuyển</th>
                    </tr>
                  <?php 
                   for($i = 0; $i < count($chuyenJson);$i++) {
                  ?>
                    <tr>
                      <td><?php echo  $chuyenJson[$i]['id_vanchuyen'];  ?></td>
                      <td><?php echo  $chuyenJson[$i]['id_donhang'];  ?></td>
                      <?php 
                        if ($chuyenJson[$i]['trangthai_vanchuyen']==0) {
                       ?>
                      <td class="t01-td-capnhaAndXoa" style="display: flex; width: 100%; border: none; justify-content: space-around;"><a href="./AdminQuanLyVanChuyen/Xacnhan_vanchuyen/<?php echo  $chuyenJson[$i]['id_vanchuyen']; ?>">xác nhận</a> <h4 style="color: red;">Đang xử lý</h4></td> 
                      <?php 
                       }else{
                       ?>
                         <td class="t01-td-capnhaAndXoa"><h4 style="color:green;text-align: center; ">Xử lý thành công</h4></td> 
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
    </main>