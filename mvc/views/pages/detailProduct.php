<?php 
    $chuyenJson_oneChieTietSanPham = json_decode($data['chitietsanpham'],true);
    $chuyenJson_hinhanh = json_decode($data['hinhanh'],true);
    $chuyenJson_listAllChiTietSanPham_theosanpham = json_decode($data['listAllChiTietSanPham_theosanpham'],true);
    $chuyenJson_mausac = json_decode($data['mausac'],true);

 ?>
    <div class="container">
        <div class="container-hinhanhAndChitiet">
            <div class="container-hinhanh">
                <div class="container-hinhanh-hinhlon">
                    <img class="container-hinhanh-hinhlon__img" src="./uploads/<?php   for ($i=0; $i < count($chuyenJson_hinhanh) ; $i++) { 
       if($chuyenJson_oneChieTietSanPham[0]['id_chitiet']== $chuyenJson_hinhanh[$i]['id_chitiet']){
            echo $chuyenJson_hinhanh[$i]['hinhanh'];
            break;
       }
    } ?>" alt="">
                </div>
                <div class="container-hinhanh-listhinhanh">
                    <ul class="container-hinhanh-listhinhanh-list">
                        <?php 
                            for ($j=1; $j < count($chuyenJson_hinhanh) ; $j++) {
                                if($chuyenJson_oneChieTietSanPham[0]['id_chitiet'] == $chuyenJson_hinhanh[$j]['id_chitiet']){
                         ?>
                            <li><img src="./uploads/<?php 
                            echo $chuyenJson_hinhanh[$j]['hinhanh'];

                        ?>" alt="" class="container-hinhanh-listhinhanh-listItemsImg">
                            </li>

                            <?php 
                             }   
                            }
                         ?>
                    </ul>
                </div>
            </div>
            <form action="" method="POST" class="form-container-chitietsanpham">
                <div class="container-chitietsanpham">
                    <h2 class="container-chitietsanpham__tensp"><?php echo $chuyenJson_oneChieTietSanPham[0]['tensp'] ?></h2>
                    <div class="container-chitietsanpham-maspAndTrangthai" style="padding-right: 25px;">
                        <label for="">Mã sản phẩm:
                            <h3><?php echo $chuyenJson_oneChieTietSanPham[0]['maso_sanpham'] ?></h3></label>
                        <label for="">Tình trạng:
                            <h3>active</h3></label>
                    </div>
                    <p class="container-chitietsanpham__gia">Gia :
                        <?php echo $chuyenJson_oneChieTietSanPham[0]['gia_sp'] ?> vnd</p>
                    <hr style=" border-top: 1px solid #aaaa; margin: 10px 0; background: #aaaa;">
                    <div class="container-chitietsanpham-mota">
                        <h3>Mo ta</h3>
                        <p>
                            <?php echo $chuyenJson_oneChieTietSanPham[0]['mota_sp'] ?>
                        </p>
                    </div>
                    <hr style=" border-top: 1px solid #aaaa; margin: 10px 0; background: #aaaa;">
                    <div class="container-chitietsanpham-mau">
                        <?php 
                            for ($i=0; $i < count($chuyenJson_mausac) ; $i++) { 
                                 for ($j=0; $j < count($chuyenJson_listAllChiTietSanPham_theosanpham) ; $j++){
                                     if ($chuyenJson_mausac[$i]['id_mau'] == $chuyenJson_listAllChiTietSanPham_theosanpham[$j]['id_mau']) {

                         ?>
                        <a href=""><input type="button" style="background: <?php echo $chuyenJson_mausac[$i]['mau'] ?>; cursor: pointer; width: 30px; height: 30px;border: 1px solid #eee; border-radius: 2px;" value="" ></a>
                        <?php           
                                            break;
                                     }
                                 }
                            }
                         ?>
                    </div>
                    <hr style=" border-top: 1px solid #aaaa; margin: 10px 0; background: #aaaa;">
                    <div class="container-chitietsanpham-sizeAndSoluong">
                        <div class="container-chitietsanpham-size">
                            <label for="">Size: </label>
                            <select  style="width: 70%;border: 1px solid #aaaa; border-radius: 10px;">
                                    <option value="volvo">size 1</option>
                                    <option value="saab">size 2</option>
                                    <option value="opel">size 3</option>
                                    <option value="audi">size 4</option>
                            </select>
                        </div>
                        <div class="container-chitietsanpham-soluong">
                            <label for="">Số lượng: </label>
                            <select name="soluong" style="width: 70%;border: 1px solid #aaaa; border-radius: 10px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                    </div>
                    <div class="container-chitietsanpham-quydinhdoitra">
                        <details class="container-chitietsanpham-quydinhdoitra__details">
                            <summary>Quy định đổi sản phẩm</summary>
                            <p> - by Refsnes Data. All Rights Reserved.</p>
                            <p>All content and graphics on this web site are the property of the company Refsnes Data.</p>
                        </details>
                    </div>
                    <div class="container-chitietsanpham-quydinhbaohanh">
                        <details>
                            <summary>Bảo hành thế nào?</summary>
                            <p> - by Refsnes Data. All Rights Reserved.</p>
                            <p>All content and graphics on this web site are the property of the company Refsnes Data.</p>
                        </details>
                    </div>
                    <div class="container-chitietsanpham-themGioHang">
                        <input type="submit" name="themgiohang" value="Them vao gio hang" class="container-chitietsanpham-themGioHang__submit">
                    </div>
                    <div class="container-chitietsanpham-thanhToan">
                        <input type="submit" name="" id="thanhtoan" value="thanh toan" class="container-chitietsanpham-thanhToan__submit">
                    </div>
                </div>
            </form>
        </div>
    </div>