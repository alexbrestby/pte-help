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
        if (preg_match('/ans_\d_img/', $key)) {
            echo "<div class='answer-img><img src='/public/assets/img/db/{$value}'</div>";
        }
        if (preg_match('/ans_\d_is_true/', $key) && $value === 1) {
            echo "<div class='correct-answer' hidden>$key</div>";
        }
        if ($key === 'ans_link' && $value) {
            echo "<div class='answer-link' hidden>$value</div>";
        }
    }
}
?>
  </div>
  <div class="prev-question d-none">
    <a href="/pte/exercise/<?php echo $question['q_id'] - 1; ?>">предыдущий вопрос</a>
  </div>
  <div class="next-question d-none">
    <a href="/pte/exercise/<?php echo $question['q_id'] + 1; ?>">следующий вопрос</a>
  </div>
</main>
<?php include ROOT . '/app/views/layouts/footer.php';?>