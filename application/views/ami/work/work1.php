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
<td><input type="text" name="name" value="<?php echo $name;?>" /></td>
</tr>
<tr>
<td>email: </td>
<td><input type="text" name="email" value="<?php echo $email;?>" /></td>
</tr>
<tr>
<td>cellphone: </td>
<td><input type="text" name="cellphone" value="<?php echo $cellphone;?>" /></td>
</tr>
</table>
<input type="submit" value="SURE" />
</form>
</body>
</html>