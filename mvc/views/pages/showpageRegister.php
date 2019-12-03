  <div class="container">
        <div class="container-form">
            <div style="width: 100%; text-align:center;"><h3>Trang đăng ký tài khoản</h3></div>
            <form action="./HomeUser/Dangky" method="POST" class="container-form-formdangky">
                <label for="">Ho ten</label>
                <input name="hoten" type="text">

                <label for="">Sdt</label>
                <input name="sdt" type="text">

                <label for="">Email</label>
                <div style="color: blue ; font-size: 15px; margin-left: 2px;" id="messageEmail"></div>
                <input name="email" type="email" id="emailUser">


                <label for="">matkhau</label>
                <input name="password" type="password">

                <label for="">gioitinh</label>
                <select name="gioitinh">
                  <option value="0">Nam</option>
                  <option value="1">Nữ</option>
                </select>
 
                <!-- <div>
                <label for="">Ngay Sinh</label>
               <input type="date" name="ngaysinh" >
                </div> -->
                <div class="container-form-formdangky-items">
                    <input class="container-form-formdangky-items_input" name="dangkyUser" value="Đăng ký" type="submit" style=" width: 70px;">
                    
                </div>
            </form>
        </div>
        
    </div>