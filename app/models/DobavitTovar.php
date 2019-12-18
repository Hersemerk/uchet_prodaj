<?php

class DobavitTovar
{
		public static function dobavit($name, $ed_izm, $cena_z, $cena_p)
		{
				$db = Db::getConnection();

				$sql = 'INSERT INTO tovari VALUES (NULL, :name, :ed_izm, :cena_z, :cena_p)';

				$result = $db->prepare($sql);
				$result->bindParam(':name', $name, PDO::PARAM_STR);
				$result->bindParam(':ed_izm', $ed_izm, PDO::PARAM_STR);
				$result->bindParam(':cena_z', $cena_z, PDO::PARAM_INT);
				$result->bindParam(':cena_p', $cena_p, PDO::PARAM_INT);
				$result->execute();
		}
}
