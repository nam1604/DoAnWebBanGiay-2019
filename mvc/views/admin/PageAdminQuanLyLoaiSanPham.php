  <?php 
          $chuyenJson = json_decode($data['loaiSanPham'],true);

   ?>
 <main class="Main">
        <h1> Day la trang them loai san pham</h1>
        <div class="Main-loaisanpham">  
            <div class="Main-loaisanphamForm">
                <form action="./AdminQuanLyLoaiSanPham/themLoaiSanPham" method="post">
                        <div class="Main-loaisanpham-contentleft">
                            <div class="Main-loaisanpham-contentleft-formthem">
                                <label for=""><h4>Ten Loai: </h4></label>
                                <input type="text" name="tenloaisp" id="" >
                            </div>
                            <div class="Main-loaisanpham-contentleft-submit"><input type="submit" value="them loai" name="themloaisp"></div>
                        </div>
                    </form>
            </div>  
       
            <div class="Main-loaisanpham-Showloaisanpham">
                <table id="t01" style="width:100%">
                    <tr>
                      <th>ID</th>
                      <th>Tên Loại</th> 
                      <th>Chức năng</th>
                    </tr>
                  <?php 
                   for($i = 0; $i < count($chuyenJson);$i++) {
                  ?>
                    <tr>
                      <td><?php echo  $chuyenJson[$i]['id_loaisp'];  ?></td>
                      <td><?php echo  $chuyenJson[$i]['tenloaisp'];  ?></td>
                      <td class="t01-td-capnhaAndXoa"><a href="./AdminQuanLyLoaiSanPham/showPageCapNhatLoaiSanPham/<?php echo  $chuyenJson[$i]['id_loaisp']; ?>">Cập nhật</a> | <a href="./AdminQuanLyLoaiSanPham/xoaLoaiSanPham/<?php echo  $chuyenJson[$i]['id_loaisp']; ?>"> Xóa</a></td>
                    </tr>
                  <?php 
                    }
                  ?>
                  </table>
            </div>
        </div>
    </main>