<?php 

	class AdminQuanLySizeModel extends DB
	{
		 // xu ly size

      public function get_Size(){
      $sql = "SELECT * FROM dbl_size";
      $result = mysqli_query($this->con,$sql);
      $mang = array();
       while($row = mysqli_fetch_array($result)){
           $mang[]=$row;
       }
       return json_encode($mang);
         
    }
	
	}
 
 ?>