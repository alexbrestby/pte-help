<?php


class SiteController
{
    public function actionIndex()
    {
        $users = User::getAllUsers();
        require_once(ROOT . '/app/views/site/index.php');
        return true;
    }
}
