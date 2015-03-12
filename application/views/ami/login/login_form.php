<div id="container" class="container">
<h2 id="login-head" class="login-head">登陆</h2>
<hr noshade="noshade" />
<div id="login" class="login">
	<p><?=$old_account?></p>
	<form  id='login-form' class="login-form" role="form" name='login' method="post" accept-charset="utf-8" action="http://localhost/index.php/ami_home/login" />
		<div class="form-group">
			<lable id="email-text" class="form-text" >Email:</lable>
			<input class="form-input email" type='text' name='account' id='account' placeholder="Enter your email"/>
			<p class="error-info">不合法的邮件地址</p>
		</div>
		<div class="form-group">
			<lable id="password-text" class="form-text">密&nbsp码:</lable>
			<input class="form-input password" type='password' name='password' id='password' placeholder="请输入密码"/>
		</div>
		
		<input id="submit" class="submit btn" type='submit' name='login_submit' value='LOGIN' />
	</form>
	<p id="login-describe">默认密码是你的手机号，登陆后可更改</p>
</div>


<div id="no-account" class="no-account">
	<p>&gt还没有账号？<a href="#">立即注册</a></p>
</div>


</div>
