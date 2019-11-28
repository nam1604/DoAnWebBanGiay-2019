<?php 
    $chuyenJson_chitietsp = json_decode($data['chitietsanpham'],true);
    $chuyenJson_hinhanh = json_decode($data['hinhanh'],true);
    $chuyenJson_sanPham = json_decode($data['sanPham'],true);

  ?>
    <div class="container">
        <div class="Showsanpham">
            <?php 
          for ($k=0; $k < count($chuyenJson_sanPham) ; $k++) { 
              for ($i=0; $i < count($chuyenJson_chitietsp) ; $i++){
              if ($chuyenJson_sanPham[$k]['id_sp'] == $chuyenJson_chitietsp[$i]['id_sp']) {
                # code...
         ?>
                <div class="Showsanpham-items">
                    <a href="./Home/ShowSanPham_details/<?php echo $chuyenJson_chitietsp[$i]['id_chitiet'] ?>/<?php echo $chuyenJson_chitietsp[$i]['id_sp'] ?>" class="Showsanpham-items-stylea">
                        <div class="Showsanpham-items-stylea-picture">
                            <img src="./uploads/<?php 
                       for ($j=0; $j < count($chuyenJson_hinhanh); $j++) { 
                    if ($chuyenJson_chitietsp[$i]['id_chitiet'] ==$chuyenJson_hinhanh[$j]['id_chitiet'] ) {
                      echo $chuyenJson_hinhanh[$j]['hinhanh'];
                      break;
                    }
                  }
                     ?>" alt="" class="Showsanpham-items-stylea-picture__img">
                        </div>
                        <p class="Showsanpham-items-stylea__title">
                            <?php echo $chuyenJson_chitietsp[$i]['tensp'] ?>
                        </p>
                        <p class="Showsanpham-items-stylea__price">
                            <?php echo $chuyenJson_chitietsp[$i]['gia_sp'] ?>
                        </p>
                    </a>
                </div>
                <?php
                break;
             }
          }
        }
     ?>
        </div>
    </div>
 