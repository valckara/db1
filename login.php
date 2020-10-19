<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php include("constants.php"); ?>
<div class="container mlogin">
<div id='login'>
<h1>Вход</h1>
<form action="" id="loginform" method="post"name="loginform">
	<p><label for="user_login">Имя пользователя<br>
	<input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
	<p><label for="user_pass">Пароль</br>
		<input class="input" id="password"  name="password" size='20' type='password' value=''></label></p>
		<p class="submit"><input type="submit" name="login" class="button" value="Login in"></p>
	</form>
</div>	
</div>
</body>
</html>
