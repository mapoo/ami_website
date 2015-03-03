<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
</head>
<body>
<?php if ( isset($para) ) : ?>
<h1><?php echo $para;?></h1>
<?php endif ?>

<form action="http://localhost/index.php/ami_work/completeInfo" method="POST" >
<table>
<tr>
<td>name: </td>
<td><input type="text" name="name" value="" /></td>
</tr>
<tr>
<td>email: </td>
<td><input type="text" name="email" value="" /></td>
</tr>
<tr>
<td>cellphone: </td>
<td><input type="text" name="cellphone" value="" /></td>
</tr>
</table>
<input type="submit" value="SURE" />
</form>
</body>
</html>