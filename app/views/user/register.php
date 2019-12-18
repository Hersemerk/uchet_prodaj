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
<input type="text" class="user" name="FIO" placeholder="ФИО" value=""/><br><br>
<input type="text" class="user" name="proc_com" placeholder="Процент комиссионных" value=""/><br><br>
<input type="text" class="user" name="role" placeholder="Роль (1 - Адм., 0 - Польз.)" value=""/><br><br>
<input type="text" class="user" name="login" placeholder="Логин" value=""/><br><br>
<input type="password"  class="user" name="password" placeholder="Пароль" value=""/><br><br>
<input type="password"  class="user" name="password1" placeholder="Повторите пароль" value=""/><br><br>
<input type="submit" name="submit" class="button" value="Зарегистрировать" />
<a href="/user/login">Отмена</a>
</form>
</body>
</html>
