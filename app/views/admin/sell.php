<!Doctype html>
<html>
<head>

</head>
<body>
<?php if(isset ($errors) && is_array($errors)): ?>
	 <ul>
	   <?php foreach ($errors as $error): ?>
		<li> - <?php echo $error; ?> </li>
		<?php endforeach; ?>
	 </ul>
	<?php endif; ?>
<h1>Продажа товара</h1>
<form action="#" method="POST">
<input type="text" class="user" name="tovar" placeholder="Наименование товара" value=""/><br><br>
<input type="text"  class="user" name="amount" placeholder="Количество" value=""/><br><br>
<input type="submit" name="submit" class="button" value="Продать товар" />
<a href="/admin">Отмена</a>
</form>
</body>
</html>
