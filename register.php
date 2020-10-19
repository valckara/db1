<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8"> 
 <title> </title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include("constants.php"); ?>
<div class="container mregister">
<div id="login">
 <h1>Регистрация</h1>
<form action="register.php" id="registerform" method="post"name="registerform">
 <p><label for="user_login">Имя<br>
 <input class="input" id="first_name" name="first_name"size="32"  type="text" value=""></label></p>
<p><label for="user_login">Фамилия<br>
<input class="input" id="second_name" name="second_name" size="32"type="text" value=""></label></p>
<p><label for="user_pass">Email<br>
<input class="input" id="email" name="email"size="20" type="email" value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	  <p class="regtext">Уже зарегистрированы? <a href= "login.php">Войти</a>!</p>
 </form>
</div>
</div>
</body>
</html>
<?php
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['first_name']) && !empty($_POST['email']) && !empty($_POST['second_name']) && !empty($_POST['password'])) {
  $first_name= htmlspecialchars($_POST['first_name']);
	$email=htmlspecialchars($_POST['email']);
 $second_name=htmlspecialchars($_POST['second_name']);
 $password=htmlspecialchars($_POST['password']);
 $query=mysql_query("SELECT * FROM usertbl WHERE first_name='".$first_name."'");
  $numrows=mysql_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO usertbl
  (first_name, second_name, email,password)
	VALUES('$first_name','$second_name', '$email', '$password')";
  $result=mysql_query($sql);
 if($result){
	$message = "Аккаунт успешно создан";
} else {
 $message = "Ошибка";
  }
  } else {
	$message = "Этот пользователь уже зарегистрирован";
   }
	} else {
	$message = "Заполните пустые поля";
	}
	}
	?>

	<?php if (!empty($message)) {echo "<p class="error">" . "MESSAGE: ". $message . "</p>";} ?>