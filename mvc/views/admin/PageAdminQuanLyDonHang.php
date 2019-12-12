  <?php 
          $chuyenJson = json_decode($data['alldonhang'],true);
      

  
   ?>
 <main class="Main">
        <h1> Đây trang Quản Lý Đơn Hàng</h1>
  
            <div class="Main-loaisanpham-Showloaisanpham" style="padding: 10px;">
                <table id="t01" style="width:100%">
                    <tr>
                      <th style="width: 20%;">Mã đơn hàng</th>
                      <th style="width: 25%;">Tên sản phẩm</th> 
                      <th style="width: 25%;">Tổng </th> 
                      <th style="width: 25%;">Trạng thái </th>
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
                      <td class="t01-td-capnhaAndXoa" > <h4 style="color: red; text-align: center;">Đang xử lý</h4></td> 
                      <?php 
                       }else{
                       ?>
                         <td class="t01-td-capnhaAndXoa"><h4 style="color:green;text-align: center; ">Đơn hàng hoàn thành</h4></td> 
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