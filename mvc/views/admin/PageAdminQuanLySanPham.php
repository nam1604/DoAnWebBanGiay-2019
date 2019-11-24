 <main class="Main">
        <h1> day la trang san pham</h1>
        <div class="Main-loaisanpham">  
            <div class="Main-loaisanphamForm">
                <form action="">
                        <div class="Main-loaisanpham-contentleft">
                            <div class="Main-loaisanpham-contentleft-formthem">
                                <label for=""><h4>Loại sản phẩm</h4></label>
                                <select style="border: 1px solid #ff7fff; border-radius: 10px; height: 30px;">
                                        <option value="audi"  selected>-------------Chọn loại sản phẩm-----------</option>
                                        <option value="volvo">Nam</option>
                                        <option value="saab">Nữ</option>
                                        <option value="vw">trẻ em</option>
                                        
                                 </select>
                                <label for="" ><h4>Tên Sản Phẩm: </h4></label>
                                <input type="text" name="" id="" >  
    
                            </div>
                            <div class="Main-loaisanpham-contentleft-submit"><input type="submit" value="Thêm"></div>
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
                    <tr>
                      <td>Loai 1</td>
                      <td>id 2</td>
                      <td></td>
                      <td class="t01-td-chitietsanpham"><a href="./AdminQuanLyChiTietSanPham/showPageChiTietSanPham">Chi tiết sản phẩm</a></td>
                      <td class="t01-td-capnhaAndXoa"><a href="">Cập nhật</a> | <a href=""> Xóa</a></td>
                    </tr>
                
                  </table>
            </div>
        </div>
    </main>