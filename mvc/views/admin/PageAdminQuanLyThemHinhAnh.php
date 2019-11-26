<?php 

  
  
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
                  <td class="Main-loaisanpham-ShowChitiet-hinhanh">
                    <div>
                         <img src="" alt="" width="60px" height="60px">
                         <img src="./uploads/download1574343193%20-%20Copy1574662962.jpg" alt="" width="60px" height="60px">
                         <img src="./uploads/download1574343193%20-%20Copy1574662962.jpg" alt="" width="60px" height="60px">
                         <img src="./uploads/download1574343193%20-%20Copy1574662962.jpg" alt="" width="60px" height="60px">
                         <img src="./uploads/download1574343193%20-%20Copy1574662962.jpg" alt="" width="60px" height="60px">
                      
                    </div>
                 
                  
                   <div class="Main-loaisanpham-ShowChitiet-hinhanh_themanh">
                      <a href="">Thêm ảnh </a>
                   </div>
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