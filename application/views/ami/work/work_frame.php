
<script type="text/javascript" src=".js/jquery-2.1.3.min.js"></script>
<!--
<script type="text/javascript">
$(document).ready( function() {

});
</script>
-->

<body>
<h1>This is the work space.</h1>
<h3>Welcome,<?= $name?></h3>

<a href="http://localhost/index.php/ami_work/mainpage">完善信息</a>
<a href="http://localhost/index.php/ami_work/mainpage">改变密码</a>
<?php if ($level == 0) {?>
<a href="http://localhost/index.php/ami_work/mainpage">招新情况</a>
<a href="http://localhost/index.php/ami_work/mainpage">发送短信</a>
<?php } ?>
<br />
<!--
<div id="board">
<p>This is the working board.</p>
</div>
-->


