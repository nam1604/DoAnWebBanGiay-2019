<?php 
	
	class AdminQuanLyMauSacModel extends DB
	{
		
		 // xu ly Mau
	    public function get_Mau(){
	      $sql = "SELECT * FROM dbl_mau";
	      $result = mysqli_query($this->con,$sql);
	      $mang = array();
	       while($row = mysqli_fetch_array($result)){
	           $mang[]=$row;
	       }
	       return json_encode($mang);
	         
	    } 
	   
	}
 ?>