<?php 
  $chuyenJson_sp = json_decode($data['sanpham'],true);
  $chuyenJson_loaiSp = json_decode($data['loaisanpham'],true);
  $chuyenJson_oneSp = json_decode($data['onesanpham'],true);
 ?>
 <main class="Main">
        <h1> day la trang cap nhat san pham</h1>
        <div class="Main-loaisanpham">  
            <div class="Main-loaisanphamForm">
                <form action="./AdminQuanLySanPham/capNhatSanPham/<?php echo  $chuyenJson_oneSp[0]['id_sp'];  ?>" method="post">
                        <div class="Main-loaisanpham-contentleft">
                            <div class="Main-loaisanpham-contentleft-formthem">
                                <label for="" ><h4>Tên Loại </h4></label>
                                <input type="text" name="" id="" value="<?php echo  $chuyenJson_oneSp[0]['tenloaisp'];  ?>" disabled > 
                                <label for="" ><h4>ID Sản Phẩm: </h4></label>
                                <input type="text" name="" id="" value="<?php echo  $chuyenJson_oneSp[0]['id_sp'];  ?>" disabled > 
                                <label for=""><h4>Loại sản phẩm</h4></label>
                                <select name="idLoaisp" style="border: 1px solid #ff7fff; border-radius: 10px; height: 30px;">
                                     <option value="0"  selected>-------------Chọn loại sản phẩm-----------</option>
                                    <?php 
                                       for($i = 0; $i < count($chuyenJson_loaiSp);$i++) { 
                                    ?>
                                     <option value="<?php echo  $chuyenJson_loaiSp[$i]['id_loaisp'];  ?>"><?php echo  $chuyenJson_loaiSp[$i]['tenloaisp'];  ?></option>
                                    <?php
                                     } 
                                    ?>
                                 </select>
                                <label for="" ><h4>Tên Sản Phẩm: </h4></label>
                                <input type="text" name="tensp" id="" value="<?php echo  $chuyenJson_oneSp[0]['tensp'];  ?>" >  
    
                            </div>
                            <div class="Main-loaisanpham-contentleft-submit"><input type="submit" value="Cập nhật" name="capnhatsp"></div>
                        </div>
                    </form>
            </div> 
       
            <div class="Main-loaisanpham-Showloaisanpham">
                <table id="t01" style="width:100%">
                    <tr>
                      <th>Tên loại</th>
                      <th>ID-SP</th>
                      <th>Tên sản phẩm</th> 
                      <th>Quản lý SP</th> 
                      <th>Chức năng</th>
                    </tr>
                      <?php 
                        for($i = 0; $i < count($chuyenJson_sp);$i++) { 
                      ?>
                    <tr>
                      <td><?php echo  $chuyenJson_sp[$i]['tenloaisp'];  ?></td>
                      <td><?php echo  $chuyenJson_sp[$i]['id_sp'];  ?></td>
                      <td><?php echo  $chuyenJson_sp[$i]['tensp'];  ?></td>
                      <td class="t01-td-chitietsanpham"><a href="./AdminQuanLyChiTietSanPham/showPageChiTietSanPham">Chi tiết sản phẩm</a></td>
                      <td class="t01-td-capnhaAndXoa"><a href="./AdminQuanLySanPham/showPageCapNhatSanPham/<?php echo  $chuyenJson_sp[$i]['id_sp'];  ?>">Cập nhật</a> | <a href="./AdminQuanLySanPham/delete_SanPham/<?php echo  $chuyenJson_sp[$i]['id_sp'];  ?>"> Xóa</a></td>
                    </tr>
                    <?php
                      } 
                    ?>
                
                  </table>
            </div>
        </div>
    </main>