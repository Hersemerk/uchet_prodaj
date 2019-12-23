<?php

class Seller
{
		public static function commision($tovar, $amount)
		{
			$db = Db::getConnection();
				
			$sql_proc = 'SELECT proc_com FROM user WHERE id = :id';

			$id_user = $_SESSION['user'];

			$result = $db->prepare($sql_proc);
			$result->bindParam(':id', $id_user, PDO::PARAM_INT);
			$result->execute();
			$proc = $result->fetch();

			$sql_cena = 'SELECT cena_p FROM tovari WHERE name = :name_t';

			$result = $db->prepare($sql_cena);
			$result->bindParam(':name_t', $tovar, PDO::PARAM_STR);
			$result->execute();
			$cena = $result->fetch();

			$sql = 'UPDATE user set proc_com = :proc WHERE id = :id_user';

			$vozn = $cena[0] * $amount * $proc[0];
			$result = $db->prepare($sql);
			$result->bindParam(':proc', $vozn, PDO::PARAM_INT);
			$result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
			$result->execute();
		}
}
