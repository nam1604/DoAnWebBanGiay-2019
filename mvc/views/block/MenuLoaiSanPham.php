   <?php 
      $chuyenJson_laoisanpham = json_decode($data['loaisanpham'],true);
    ?>
    <div class="container">
      <div class="menu-loaisanpham">
        <ul>
          <?php 
            foreach ($chuyenJson_laoisanpham as $key => $loaisanpham) {
            
           ?>
          <li><a href="./Home/ShowSanPham_TheoLoai/<?php echo $loaisanpham['id_loaisp'] ?>"><?php echo $loaisanpham['tenloaisp'] ?></a></li>
        
          <?php 
      # code...
                }
           ?>
        </ul>
      </div>
    </div>