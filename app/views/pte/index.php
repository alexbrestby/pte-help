<?php include ROOT . '/app/views/layouts/header.php'; ?>
<main class="main">
  <section class="main-page pte">
    <div class="selector">
      <img src="/public/assets/img/assistant.png" alt="assistant">
      <a href='/pte/test'>Виртуальный помощник</a>
      <p>
        Здесь Вы можете воспользоваться возможностями ассистента 
        для прохождения тестирования по ПТЭ. Просто начните вводить свой вопрос в строку поиска...
      </p>
    </div>
    <div class="selector">
      <img src="/public/assets/img/exam.png" alt="assistant">
      <a href='/pte/exercises'>Пройти тест</a>
      <p>
        В этой секции Вы можете поупражнятся в решении вопроов из теста. После ответа на вопрос, Вам будет показан правильный ответ со ссылкой на текст ПТЭ. 
      </p>
    </div>
  </section>
</main>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>