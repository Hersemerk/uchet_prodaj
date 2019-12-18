<?php

class CheckEmail
{
	public static function check($login)
	{
		$db = Db::getConnection();

		$sql = 'SELECT id FROM user WHERE login = :login';

		$result = $db->prepare($sql);
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->execute();

		$user = $result->fetch();

		if ($user) 
		{
			// Если запись существует, возвращаем id пользователя
			return $user['id'];
		}
		return false;
	}
}
