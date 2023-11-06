<?php


class PteTestController
{
    public function actionIndex()
    {
        require_once(ROOT . '/app/views/pte_test/index.php');
        return true;
    }
  }