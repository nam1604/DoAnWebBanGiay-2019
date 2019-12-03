$(document).ready(function(){
	$("#emailUser").keyup(function(){
		var emailKQ = $(this).val();
		$.post("./Ajax/CheckuEmailUser",{email:emailKQ},function(data){
			if(data == 0){
				$("#messageEmail").html('Email hợp lệ !!');
			}else{
				$("#messageEmail").html('Email đã có người đăng ký !!!');
			}
			
		})
	}); 
});