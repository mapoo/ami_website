
<script type="text/javascript" src=".js/jquery-2.1.3.min.js"></script>
<!--
<script type="text/javascript">
$(document).ready( function() {

});
</script>
-->
<div id="work-space">
<div class="container">
	<h3>Welcome,<?= $name?></h3>

	<div class="header">
		<ul>
		<li id="change-info-head"class="active" ><a href="http://localhost/index.php/ami_work/mainpage">完善信息</a></li>
		<li id="change-password-head"class="" ><a href="http://localhost/index.php/ami_work/mainpage">改变密码</a></li>
		
	<?php if ($level == 0) {?>
	<li><a href="http://localhost/index.php/ami_work/mainpage">招新情况</a></li>
	<li><a href="http://localhost/index.php/ami_work/mainpage">发送短信</a></li>
	<?php } ?>
	</ul>
	</div>
</div>
</div>

