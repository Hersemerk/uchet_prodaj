<?php

class SellTovar
{
		public static function sell($tovar, $amount)
		{
				$db = Db::getConnection();
				
				$sql_tovar = 'SELECT id FROM tovari WHERE name = :name';

				$id_user = $_SESSION['user'];

				$result = $db->prepare($sql_tovar);
				$result->bindParam(':name', $tovar, PDO::PARAM_STR);
				$result->execute();
				$id_tovara = $result->fetch();

				$sql = 'NSERT INTO prodaji VALUES (NULL, :date, :kol_vo,:id_p, :id_t)';

				$date = date("dmY");

				$result = $db->prepare($sql);
				$result->bindParam(':date', $date, PDO::PARAM_STR);
				$result->bindParam(':kol_vo', $amount, PDO::PARAM_STR);
				$result->bindParam(':id_p', $id_user, PDO::PARAM_INT);
				$result->bindParam(':id_t', $id_tovara, PDO::PARAM_INT);
				$result->execute();
		}
}
