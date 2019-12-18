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

<form action="#" method="POST">
<input type="text" class="user" name="name" placeholder="Наименование товара" value=""/><br><br>
<input type="text"  class="user" name="ed_izm" placeholder="Единица измерения" value=""/><br><br>
<input type="text"  class="user" name="cena_z" placeholder="Цена закупки" value=""/><br><br>
<input type="text"  class="user" name="cena_p" placeholder="Цена продажи" value=""/><br><br>
<input type="submit" name="submit" class="button" value="Добавить товар" />
<a href="/admin">Отмена</a>
</form>
</body>
</html>
