<?php

class RegisterUser 
{
	public static function register($login, $password, $fio) 
	{
		$db = Db::getConnection();

		$sql = 'INSERT INTO user VALUES (NULL, :login, :password, false, :fio, 1)';

		$result = $db->prepare($sql);
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);
		$result->bindParam(':fio', $fio, PDO::PARAM_STR);
		$result->execute();
	}
}
