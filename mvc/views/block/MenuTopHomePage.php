    <header>
        <nav class="top-nav">
          <div class="container">
            <a href="./Home"><img class="logo" src="./mvc/views/images/logo.jpg" alt="Logo"></a>
            <ul class="menu">
              <li><a href="./Home">Home</a></li>
              <li><a href="#">About</a></li>
              
              <li class="top-nav-container-menu__flex"><a href="#"><i class="fas fa-cart-plus"></i>
                Cart</a></li>
              <?php 
                if (isset($_SESSION['usernameUser-login'])) {
                 echo '<li class="top-nav-container-menu__flex"><a href="./Home/Show_personal"><i class="fas fa-user-check"></i>
                    personal</a></li>
                  <li class="top-nav-container-menu__flex"><a href="./HomeUser/Dangxuat"><i class="fas fa-user-check"></i>
                   Đăng xuất </a></li>';
                }else{
                  echo '<li class="top-nav-container-menu__flex"><a href="./Home/Show_singin"><i class="far fa-user"></i>
                    sing in</a></li>
                  <li class="top-nav-container-menu__flex"><a href="./Home/Show_singup"><i class="fas fa-key"></i>
                    sing up</a></li>';
                }
               ?>
            
             
            </ul>
          </div>
        </nav>
    </header>