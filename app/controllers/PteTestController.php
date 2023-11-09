<?php


class PteTestController
{
    public function actionIndex()
    
    {    
      if(isset($_POST['query'])){
        $query = $_POST['query'];

        if(strlen($query) > 3){
            $results = Search::getSearch($query);
            header('Content-Type: application/json');
            echo json_encode($results);
            exit;
        }
        
    } else {
          require_once(ROOT . '/app/views/pte_test/index.php');
          return true;
    }
  }
}