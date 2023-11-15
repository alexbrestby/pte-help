<?php

return array(

    'elsafety/test' => 'esTest/index',
    'elsafety/exercises' => 'esExercises/index',
    'elsafety' => 'es/index',
    'pte/test' => 'pteTest/index',
    'pte/exercise/([0-9]+)' => 'pteExercises/getQuestion/$1',
    'pte/exercises' => 'pteExercises/index',
    'pte' => 'pte/index',
    'contacts' => 'site/contact',
    'about' => 'site/about',
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
