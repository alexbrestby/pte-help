<?php

class EsExercisesController
{
    public function actionIndex()
    {
        require_once ROOT . '/app/views/el_exercises/index.php';
        return true;
    }
}
