<?php

class SiteController
{
    public function actionIndex($page = 1)
    {
        // Подключаем вид
        require_once(ROOT . '/app/views/site/index.php');
        return true;
    }
}
