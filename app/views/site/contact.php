<?php include ROOT . '/app/views/layouts/header.php'; ?>
<main class="contacts">
    <h1>contacts</h1>
    <div class="form-wrapper">

        <?php if ($result) : ?>
            <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
        <?php else : ?>
            <?php if (isset($errors) && is_array($errors)) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="signup-form"><!--sign up form-->
                <h2>Обратная связь</h2>
                <h5>Есть вопрос? Напишите нам</h5>
                <br />
                <form action="/contacts" method="post">
                    <p>Ваша почта</p>
                    <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>" />
                    <p>Сообщение</p>
                    <textarea class="message" rows="10" cols="45" name="userMessage" placeholder="Сообщение" value="<?php echo $userText; ?>"></textarea>
                    <br>
                    <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                </form>
            </div><!--/sign up form-->
        <?php endif; ?>
    </div>
</main>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>