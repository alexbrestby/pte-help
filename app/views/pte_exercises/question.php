<?php include ROOT . '/app/views/layouts/header.php';?>
<main class="main">
  <div class="question">
<?php
$counter = 0;
foreach ($question as $key => $value) {
    if (preg_match('/ans_\d_is_true/', $key) && $value) {
        $counter++;
    }
}

$list_type = $counter > 1 ? "<input type='checkbox'>" : "<input type='radio'>";

foreach ($question as $key => $value) {
    if ($value) {
        if ($key == "q_id") {
            echo "<h2 class='question-number'>Вопрос {$value}</h2>";
        }
        if ($key == "q_text") {
            echo "<div class='question-text'>{$value}</div>";
        }
        if ($key == "q_img") {
            echo "<div class='question-img'><img src='/public/assets/img/db/{$value}'></div>";
        }
        if (preg_match('/ans_\d_text/', $key)) {
            $number = substr($key, 4, 1);
            echo "<div class='answer $key'>$list_type $value</div>";
        }
        if (preg_match('/ans_\d_is_true/', $key) && $value === 1) {
            echo "<div class='correct-answer' hidden>$key</div>";
        }
    }
}
?>
  </div>
</main>
<?php include ROOT . '/app/views/layouts/footer.php';?>