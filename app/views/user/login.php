<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
</head>
<body>
	<?php if(isset ($errors) && is_array($errors)): ?>
	 <ul>
	   <?php foreach ($errors as $error): ?>
		<li> - <?php echo $error; ?> </li>
		<?php endforeach; ?>
	 </ul>
	<?php endif; ?>

<form action="#" method="post">
    <input type="text" class="user" name="login" placeholder="Логин" value="<?php echo $login; ?>"/><br><br>
    <input type="password"  class="user" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/><br><br>
    <input type="submit" name="submit" class="button" value="Вход" />
	<a href="register">Регистрация</a>
	<a href="/">Отмена</a>
</form>
</body>
</html>

