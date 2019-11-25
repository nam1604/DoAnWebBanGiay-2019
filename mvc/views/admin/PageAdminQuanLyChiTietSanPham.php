<?php 
  $chuyenJson_Size = json_decode($data['size'],true);
  $chuyenJson_Sp = json_decode($data['sanpham'],true);
  
 ?>
<main class="Main">
        <h1> Đây là trang chi tiết sản phẩm</h1>
        <div class="Main-loaisanpham">  
            <div class="Main-loaisanphamForm">
                <form action="./AdminQuanLyChiTietSanPham/themChiTietSanPham" method="post" enctype="multipart/form-data">
                        <div class="Main-loaisanpham-contentleft">
                            <div class="Main-loaisanpham-contentleft-formthem">

                                <label for=""><h4>Thêm chi tiết sản phẩm </h4></label>
                                <input type="text" name="0" id="" value="<?php echo 'id-SP :'.$chuyenJson_Sp[0]['id_sp'].' ---- '.$chuyenJson_Sp[0]['tensp']?>" disabled > 
                                 <input type="text" name="idsp" id="" value="<?php echo $chuyenJson_Sp[0]['id_sp'] ?>" hidden > 
                                <br>
                                 <label for=""><h4>Mã sản phẩm</h4></label>
                                <input type="text" name="masanpham" id="">   
                                <br>
                                <label for=""><h4>Giá: </h4></label>
                                <input type="text"id="" name="gia">   
                                <br>
                                <label for=""><h4>Màu: </h4></label>
                                <input type="text" id="" name="mau">   
                                <br>
                                <label for=""><h4>Size: </h4></label>
                                  <select name="idsize" style="border: 1px solid #ff7fff; border-radius: 10px; height: 30px;">
                                        <option value="0"  selected>-------------Chọn Size-----------</option>
                                        <?php 
                                         for($i=0; $i < count($chuyenJson_Size);$i++) {
                                         ?>
                                        <option value="<?php echo $chuyenJson_Size[$i]['id_size']?>"><?php echo $chuyenJson_Size[$i]['size']?></option>
                                         <?php 
                                          }
                                         ?>
                                        
                                 </select>
                                <br>
                                <label for=""><h4>Số lượng: </h4></label>
                                <input type="text" name="soluong" id=""  >
                                <br>
                                <label for=""><h4>Hình Ảnh: </h4></label>
                                <input type="file" name="file[]" multiple="multiple" id="" style="font-size: 0.9em; padding: 3px ; border-radius: 5px;" >   
                                <br>
                                <label for=""><h4>Mô tả sản phẩm: </h4></label>
                                <textarea name="mota" id="" cols="30" rows="10" style=" border: 1px solid #ff7fff; border-radius: 15px;padding: 15px;"></textarea>
                            </div>
                            <div class="Main-loaisanpham-contentleft-submit"><input type="submit" value="Thêm" name="themchitietsp"></div>
                        </div>
                    </form>
            </div> 
        </div>
       
    </main>
    <div class="Main-loaisanpham-ShowChitiet">
            <table id="t01" style="width:100%">
                <tr>
                  <th style="width: 50px;">ID Chi tiết  </th> 
                  <th style="width: 100px;">Mã sp </th> 
                  <th style="width: 220px;">Giá</th> 
                  <th style="width: 50px;">Size</th>
                  <th style="width: 90px;">Màu</th> 
                  <th style="width: 50px;">SL</th> 
                  <th>Hình ảnh</th> 
                  <th style="width: 400px;">Mô tả</th> 
                  <th>Chức năng</th>
                </tr>
                <tr>
                  <td>id 2</td>
                  <td>1</td>
                  <td>50000000000000000</td>
                  <td>32</td>
                  <td ><p style="width: 30px; height: 30px; border: 1px solid #eee; background: red"></p></td>
                  <td>2</td>
                  <td ><img src="../images/alphabouse.jpg" alt="" width="60px" height="60px">
                    <img src="../images/alphabouse.jpg" alt="" width="60px" height="60px">
                    <img src="../images/alphabouse.jpg" alt="" width="60px" height="60px">
                    <img src="../images/alphabouse.jpg" alt="" width="60px" height="60px">
                    <img src="../images/alphabouse.jpg" alt="" width="60px" height="60px">
                    <img src="../images/alphabouse.jpg" alt="" width="60px" height="60px">
                  
                
                </td>
                    
                  <td ><div style="width: 100%">
                  </div><textarea name="" id="" cols="30" rows="10" style="width:100%;">
                      asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasdddddddddddddddddddddddddddddddd
                      sadsadsadddddasdddddddddddddddddddddddddddddddd
                      sadsadsadddddasdddddddddddddddddddddddddddddddd
                      sadsadsadddddasdddddddddddddddddddddddddddddddd
                      sadsadsadddddasdddddddddddddddddddddddddddddddd
                      sadsadsad
                  </textarea></td>
                  <td class="t01-td-capnhaAndXoa"><a href="">Cập nhật</a> | <a href=""> Xóa</a></td>
                </tr>
              </table>
        </div>