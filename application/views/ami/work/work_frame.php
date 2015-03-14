<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>WORK_SPACE</title>
<script type="text/javascript" src=".js/jquery-2.1.3.min.js"></script>
<!--
<script type="text/javascript">
$(document).ready( function() {

});
</script>
-->
</head>
<body>
<h1>This is the work space.</h1>
<h3>Welcome,<?= $name?></h3>
<input value="完善信息" type="button" onClick="window.open('http://localhost/index.php/ami_work/completeInfo')">
<input value="改变密码" type="button" onClick="window.open('http://localhost/index.php/ami_work/changePassword')">

<?php if ($level == 0) {?>
<input value="招新情况" type="button" onClick="window.open('http://localhost/index.php/ami_work/getNew')">
<input value="发送短信" type="button" onClick="window.open('http://localhost/index.php/ami_work/deliverText')">
<?php } ?>
<br />
<div id="board">
<p>This is the working board.</p>
</div>
</body>
</html>


