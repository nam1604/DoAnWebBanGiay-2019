<?php 
  $chuyenJson_Size = json_decode($data['size'],true);
  $chuyenJson_mausac = json_decode($data['mausac'],true);
  $chuyenJson_Sp = json_decode($data['sanpham'],true);
  $chuyenJson_chiTietSanPham = json_decode($data['chitietsanpham'],true);



 ?>
    <main class="Main">
        <h1> Đây là trang chi tiết sản phẩm</h1>
        <div class="Main-loaisanpham">
            <div class="Main-loaisanphamForm">
                <form action="./AdminQuanLyChiTietSanPham/themChiTietSanPham" method="post" enctype="multipart/form-data">
                    <div class="Main-loaisanpham-contentleft">
                        <div class="Main-loaisanpham-contentleft-formthem">

                            <label for="">
                                <h4>Thêm chi tiết sản phẩm </h4></label>
                            <input type="text" name="0" id="" value="<?php echo 'id-SP :'.$chuyenJson_Sp[0]['id_sp'].' ---- '.$chuyenJson_Sp[0]['tensp']?>" disabled>
                            <input type="text" name="idsp" id="" value="<?php echo $chuyenJson_Sp[0]['id_sp'] ?>" hidden>
                            <br>
                            <label for="">
                                <h4>Mã sản phẩm</h4></label>
                            <input type="text" name="masanpham" id="">
                            <br>
                            <label for="">
                                <h4>Giá: </h4></label>
                            <input type="text" id="" name="gia">
                            <br>
                            <label for="">
                                <h4>Màu</h4></label>
                            <div style="display: flex; justify-content: space-between;">
                              <?php 
                                         for($i=0; $i < count($chuyenJson_mausac);$i++) {
                               ?>
                                <label class="container">
                                    <p style="width: 50px;height: 20px;background-color: <?php echo $chuyenJson_mausac[$i]['mau'] ?>; border-radius: 3px; border: 1px solid #fff;"></p>
                                    <input type="radio" checked="checked" name="mau" value="<?php echo $chuyenJson_mausac[$i]['id_mau'] ?>">
                                    <span class="checkmark"></span>
                                </label>
                              <?php 
                                   }
                               ?>

                            </div>

                            <br>
                            <label for="">
                                <h4>Size: </h4></label>
                            <select name="idsize" style="border: 1px solid #ff7fff; border-radius: 10px; height: 30px;">
                                <option value="0" selected>-------------Chọn Size-----------</option>
                                <?php 
                                         for($i=0; $i < count($chuyenJson_Size);$i++) {
                                 ?>
                                    <option value="<?php echo $chuyenJson_Size[$i]['id_size']?>">
                                        <?php echo $chuyenJson_Size[$i]['size']?>
                                    </option>
                                <?php 
                                     }
                                 ?>

                            </select>
                            <br>
                            <label for="">
                                <h4>Số lượng: </h4></label>
                            <input type="text" name="soluong" id="">
                            <br>

                            <label for="">
                                <h4>Mô tả sản phẩm: </h4></label>
                            <textarea name="mota" id="" cols="30" rows="10" style=" border: 1px solid #ff7fff; border-radius: 15px;padding: 15px;"></textarea>
                        </div>
                        <div class="Main-loaisanpham-contentleft-submit">
                            <input type="submit" value="Thêm" name="themchitietsp">
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </main>
    <div class="Main-loaisanpham-ShowChitiet">
        <table id="t01" style="width:100%">
            <tr>
                <th style="width: 50px;">ID Chi tiết </th>
                <th style="width: 100px;">Mã sp </th>
                <th style="width: 220px;">Giá</th>
                <th style="width: 50px;">Size</th>
                <th style="width: 90px;">Màu</th>
                <th style="width: 50px;">SL</th>
                <th>Hình ảnh</th>
                <th style="width: 400px;">Mô tả</th>
                <th>Chức năng</th>
            </tr>
             <?php 
                 for($i=0; $i < count($chuyenJson_chiTietSanPham);$i++) {
             ?>
            <tr>
                <td><?php echo $chuyenJson_chiTietSanPham[$i]['id_chitiet'] ?></td>
                <td><?php echo $chuyenJson_chiTietSanPham[$i]['maso_sanpham'] ?></td>
                <td><?php echo $chuyenJson_chiTietSanPham[$i]['gia_sp'] ?></td>
                <td><?php echo $chuyenJson_chiTietSanPham[$i]['size'] ?></td>
                <td>
                    <p style="width: 30px; height: 30px; border: 1px solid #eee; background: <?php echo $chuyenJson_chiTietSanPham[$i]['mau'] ?>"></p>
                </td>
                <td>2</td>
                <td class="Main-loaisanpham-ShowChitiet-hinhanh">
                    <div>     
                        <img src="./uploads/download1574343193%20-%20Copy1574662962.jpg" alt="" width="60px" height="60px">
 
                    </div>

                    <div class="Main-loaisanpham-ShowChitiet-hinhanh_themanh">
                        <a href="./AdminQuanLyChiTietSanPham/showPageThemHinhAnh/<?php echo $chuyenJson_chiTietSanPham[$i]['id_chitiet'] ?>/<?php echo $chuyenJson_Sp[0]['id_sp'] ?>">Thêm ảnh </a>
                    </div>
                </td>

                <td>
                    <div style="width: 100%">
                    </div>
                    <textarea name="" id="" cols="30" rows="10" style="width:100%;" disabled>
                      <?php echo $chuyenJson_chiTietSanPham[$i]['mota_sp'] ?>
                    </textarea>
                </td>
                <td class="./AdminQuanLyChiTietSanPham/capNhatChiTietSanPham/<?php echo $chuyenJson_chiTietSanPham[$i]['id_chitiet'] ?>"><a href="">Cập nhật</a> | <a href="./AdminQuanLyChiTietSanPham/xoaChiTietSanPham/<?php echo $chuyenJson_chiTietSanPham[$i]['id_chitiet'] ?>"> Xóa</a></td>
            </tr>
            <?php 
                }
             ?>
        </table>
    </div>