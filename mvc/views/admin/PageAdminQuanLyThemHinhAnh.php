<?php 

  

  $chuyenJson_Sp = json_decode($data['sanpham'],true);
  $chuyenJson_chiTietSanPham = json_decode($data['chitietsanpham'],true);
  $chuyenJson_hinhAnh = json_decode($data['hinhanh'],true);
  
 ?>
<main class="Main">
        <h1> Đây là trang chi tiết sản phẩm</h1>
        <div class="Main-loaisanpham">  
            <div class="Main-loaisanphamForm">
                <form action="./AdminQuanLyChiTietSanPham/themHinhAnh" method="post" enctype="multipart/form-data">
                        <div class="Main-loaisanpham-contentleft">
                            <div class="Main-loaisanpham-contentleft-formthem">
                                <label for=""><h4>Id chi tiết sản phẩm </h4></label>
                                <input type="input" name="idchitiet" value="<?php echo $data['idchitiet'] ?>" id="" style="font-size: 0.9em; padding: 3px ; border-radius: 5px;"  disabled> 
                                <input type="hidden" name="idsp" value="<?php echo $data['idSp'] ?>" hidden >  
                                 <input type="hidden" name="idchitiet" value="<?php echo $data['idchitiet'] ?>" hidden >  
                                <br>
                               <label for=""><h4>Hình Ảnh: </h4></label>
                                <input type="file" name="file[]" multiple="multiple" id="" style="font-size: 0.9em; padding: 3px ; border-radius: 5px;" >   
                                <br>
                            </div>
                            <div class="Main-loaisanpham-contentleft-submit"><input type="submit" value="Thêm" name="themhinh"></div>
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
                    $tam = $chuyenJson_chiTietSanPham[$i]['id_chitiet'];
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
                          <?php 
                             for($j=0; $j < count($chuyenJson_hinhAnh);$j++) {
                                    if ( $tam == $chuyenJson_hinhAnh[$j]['id_chitiet']) {
                           ?>
                            <a href="./AdminQuanLyChiTietSanPham/xoaHinhAnh/<?php echo $chuyenJson_Sp[0]['id_sp'] ?>/<?php echo $chuyenJson_hinhAnh[$j]['id_anh'] ?>">
                                <p class="Main-loaisanpham-ShowChitiet-hinhanh-p">
                                     <img   src="./uploads/<?php echo $chuyenJson_hinhAnh[$j]['hinhanh'] ?>" alt="" width="60px" height="60px">
                                </p>
                               
                            </a>
                        <?php 
                                }
                            }
                         ?>
 
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
                <td class=""><a href="./AdminQuanLyChiTietSanPham/showPageCapNhatChiTietSanPham/<?php echo $chuyenJson_Sp[0]['id_sp'] ?>/<?php echo $chuyenJson_chiTietSanPham[$i]['id_chitiet'] ?>">Cập nhật</a> | <a href="./AdminQuanLyChiTietSanPham/xoaChiTietSanPham/<?php echo $chuyenJson_Sp[0]['id_sp'] ?>/<?php echo $chuyenJson_chiTietSanPham[$i]['id_chitiet'] ?>"> Xóa</a></td>
            </tr>
            <?php 
                }
             ?>
        </table>
    </div>