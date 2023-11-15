<?php

class PteExercisesController
{
    public function actionIndex()
    {
        require_once ROOT . '/app/views/pte_exercises/index.php';
        return true;
    }

    public function actionGetQuestion($id)
    {
        $question = Search::getQuestion($id);
        require_once ROOT . '/app/views/pte_exercises/question.php';
        return true;
    }
}
