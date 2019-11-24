 <?php 
      $chuyenJson = json_decode($data['loaiSanPham'],true);
      $chuyenJson_oneLoai = json_decode($data['oneLoaiSanPham'],true);
 ?>
 <main class="Main">
        <h1> Day la trang cap nhatloai san pham</h1>
        <div class="Main-loaisanpham">  
            <div class="Main-loaisanphamForm">
                <form action="./AdminQuanLyLoaiSanPham/capnhatLoaiSanPham/<?php echo  $chuyenJson_oneLoai[0]['id_loaisp']; ?>" method="post">
                        <div class="Main-loaisanpham-contentleft">
                            <div class="Main-loaisanpham-contentleft-formthem">
                                <label for=""><h4>ID Loai: </h4></label>
                                <input type="text" name="tenloaisp" id="" value="<?php echo  $chuyenJson_oneLoai[0]['id_loaisp'];  ?>" disabled>
                                <label for=""><h4>Ten Loai: </h4></label>
                                <input type="text" name="tenloaisp" id="" value="<?php echo  $chuyenJson_oneLoai[0]['tenloaisp'];  ?>"> 
                            </div>
                            <div class="Main-loaisanpham-contentleft-submit"><input type="submit" value="Cap nhat" name="capnhatloaisp"></div>
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