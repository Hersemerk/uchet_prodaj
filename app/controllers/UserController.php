<?php

class UserController
{
    public function actionLogin()
    {
        // Переменные для формы
        $login = false;
        $password = false;

        // Обработка формы
		if (isset($_POST['submit']))
	   	{
            // Если форма отправлена
            // Получаем данные из формы
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($login)) {
                $errors[] = 'Неправильный email';
	    	}

			if (!User::checkPassword($password))
		   	{
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($login, $password);

			if ($userId == false)
			{
                // Если данные неправильные - показываем ошибку-
                $errors[] = 'Неправильные данные для входа на сайт';
			}
			else
		   	{
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
		        $user = User::getUserById($userId);
				if ($user['role'] == '1')
			   	{
                    header ("Location: /admin");
				}
				else
			   	{
                    header("Location: /");
                }

			} 
		}
        // Подключаем вид
        require_once(ROOT . '/app/views/user/login.php');
        return true;
    }

    public function actionRegister()
    {
		if (isset($_POST['submit']))
	   	{
			$login = $_POST['login'];
			$password = $_POST['password'];

            $errors = false;

			if(User::checkEmail($login))
			{
				if(CheckEmail::check($login))
				{
					$errors[] = 'Такой логин уже существует';
				} 
				else
				{
					if(User::checkPassword($password))
					{
						RegisterUser::register($login, $password);
						header('Location: /user/login');
					}
					else
					{
                		$errors[] = 'Пароль не должен быть короче 6-ти символов';
					}
				}
			}
			else
			{
				$errors[] = 'Пожалуйста, введите логин в формате foo@bar.spam';
			}
		}
	    require_once(ROOT . '/app/views/user/register.php');
	    return true;
    }
}
