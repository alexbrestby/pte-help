<?php


class PteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/app/views/pte/index.php');
        return true;
    }
  }