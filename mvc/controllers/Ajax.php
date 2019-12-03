<?php 
	/**
	 * 
	 */
	class Ajax extends Controller
	{
		public $userModel;

		public function __construct()
		{
			$this->userModel= $this->model("HomeUserModel");
		}

		public function CheckuEmailUser(){
			 $email=$_POST['email'];

			 echo $this->userModel->Check_emailAjax($email);
		}
	}
 ?>