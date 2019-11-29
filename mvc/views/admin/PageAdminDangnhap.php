
   
<style>

.fateher{
  flex:1;
}
.fateher-bottom{
    background:#72A2C0;
    height: 200px;
}
.fateher-top{
    background: #192E5B;
    height: 200px;
}
.admin_dangnhap{
   display: flex;
   justify-content: center;
   align-items: center;
    height: auto;
    background: #1D65A6;
}
.form-dangnhapadmin{
    width: 300px;
    height: auto;
    display: flex;
    flex-flow: column;
    border: 2px solid orange;
    border-radius: 15px;
    padding: 10px;
    
}
.form-dangnhapadmin input{
    border: 1px solid black;
    border-radius: 10px;
    padding: 10px;
}

</style>
    <h1> welcome Admin Adidas !!!</h1>
    <div class="fateher-top">
        
    </div>
    <div class="fateher"> 
         <div class="admin_dangnhap" >
            <form action="./Admin/CheckDangNhap_Admin" class="form-dangnhapadmin" method="post">
                <label for=""><h3>Username</h3></label>
                <input type="text" name="usernameAdmin" id="">
                <label for=""><h3>Password</h3></label>
                <input type="password" name="passwordAdmin" id="">
                <div style="display: flex;justify-content: center; margin: 10px;">
                        <input type="submit" name="dangnhapAdmin" id="" value="dang nhap" style="text-align: center;cursor: pointer;">
                </div>
            </form>
        </div> 
</div>
<div class="fateher-bottom">
        
</div>
  
