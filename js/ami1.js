/*ami*/

//检验邮件地址合法性
$(document).ready(function(){
	emailValidate();
	newbieStyle();
})

function emailValidate(){
	var error = $(".error-info");
	error.hide();
	$(".password").focus(function(){
		var $emailAddress = $(".email").val();
		if(emailAddressTest($emailAddress)){
			error.hide();
		}else{
			error.show();
		}
	})

	//正则表达式检验地址是否合格
	function emailAddressTest(email){
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	return re.test(email);
	}
}

//给newbie-list添加样式
function newbieStyle(){
	var tr = $("tr");
	for(var i = 0; i < tr.length; i=i+2){
	tr[i].style.backgroundColor = "#EAF2D3";
}
}
