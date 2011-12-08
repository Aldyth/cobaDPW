<html>
	<head>
		<title> Register </title>
	</head>
	
	<body>
		<h1>Register</h1>
		<p>Please Enter your detail below</p>
		
		<?php echo form_open('blog/register');?>
		<p>Username </br>
		<?php echo form_input('username','');?> <?php form_error('username', "<span style = color:red>", "</span>"); ?></p>
		<p>Name</br>
		<?php echo form_input('name','');?></p>
		<p>Email</br>
		<?php echo form_input('email','');?></p>
		<p>Password </br>
		<?php echo form_password('password','');?></p>
		<p>Confirm Password </br>
		<?php echo form_password('password','');?>
		<p><?php echo form_submit('submit','Register');?></p>
		<?php echo form_close();?>
		
		
		
	</body>
</html>