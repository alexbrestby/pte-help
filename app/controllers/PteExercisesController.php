<?php


class PteExercisesController
{
    public function actionIndex()
    {
        require_once(ROOT . '/app/views/pte_exercises/index.php');
        return true;
    }
  }