<h2>加入我们</h2>
<form>
<?php if ($email_taken) : ?>
	<p>Change your email.</p><br />
<?php endif  ?>
<?php if ($success) : ?>
	<p>You've Signed Up!</p><br />
<?php endif  ?>

<?php 
$attributes = array('id'=>'signup');
echo form_open('http://localhost',$attributes);
?>
Name:<input type='text' name='name' id='name' value="" />
E-mail:<input type='text' name='email' id='email' value="" />
Cellphone:<input type='text' name='cellphone' id='cellphone' value='12301234567' />
<?php echo form_submit('signup_submit','Sign Up');?>
</form>

