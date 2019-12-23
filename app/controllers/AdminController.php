<?php

class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
		echo $_SESSION['user'];
        require_once(ROOT . '/app/views/admin/index.php');
        return true;
    }

    public function actionDobavit()
    {
        // Переменные для формы
        $name = false;
        $ed_izm = false;
        $cena_z = false;
        $cena_p = false;

        // Обработка формы
		if (isset($_POST['submit'])) 
		{
			if (isset($_POST['name']) || isset($_POST['ed_izm']) || isset($_POST['cena_z']) || isset($_POST['cena_p']))
			{
                $errors[] = 'Все поля должны быть заполнены!!!';
            }

            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $ed_izm = $_POST['ed_izm'];
            $cena_z = $_POST['cena_z'];
            $cena_p = $_POST['cena_p'];

            // Флаг ошибок
            $errors = false;

            DobavitTovar::dobavit($name, $ed_izm, $cena_z, $cena_p);

        }
        // Подключаем вид
        self::checkAdmin();
        require_once(ROOT . '/app/views/admin/dobavit.php');
        return true;
    }

    public function actionSell()
    {
	    $tovar = false;
	    $amount = false;

	    if (isset($_POST['submit']))
	    {
		$tovar = $_POST['tovar'];
	    	$amount = $_POST['amount'];

		SellTovar::sell($tovar, $amount);
		Seller::commision($tovar, $amount);
    
		}
		self::checkAdmin();
        require_once(ROOT . '/app/views/admin/sell.php');
        return true;
    }
}
