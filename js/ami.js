/*ami*/

//检验邮件地址合法性
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