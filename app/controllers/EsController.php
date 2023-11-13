<?php

class EsController
{
    public function actionIndex()
    {
        require_once ROOT . '/app/views/elsafety/index.php';
        return true;
    }
}
