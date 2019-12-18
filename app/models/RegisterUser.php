<?php

class RegisterUser 
{
	public static function register($login, $password) 
	{
		$db = Db::getConnection();

		$sql = 'INSERT INTO user VALUES (NULL, :login, :password, false)';

		$result = $db->prepare($sql);
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);
		$result->execute();
	}
}
