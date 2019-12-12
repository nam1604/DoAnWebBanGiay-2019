<?php 
	
	class VanChuyenModel extends DB
	{

		public function getAll_vanchuyen()
		{
			$sql = "SELECT * FROM dbl_vanchuyen";

			$result = mysqli_query($this->con,$sql);

       		 $mang = array();
         	while($row =mysqli_fetch_array($result)){
             	$mang[]=$row;
        	 }
        	return json_encode($mang);
		}

		public function updateTrangthai_vanchuyen($id_vanchuyen)
		{
			  $sql =  "UPDATE dbl_vanchuyen SET trangthai_vanchuyen	= 1 WHERE id_vanchuyen='$id_vanchuyen'";
      		 $result = mysqli_query($this->con,$sql);
		}

	
	}
 ?>