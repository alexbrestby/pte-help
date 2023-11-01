<?php


class SiteController
{
    public function actionIndex()
    {
        $users = User::getAllUsers();
        require_once(ROOT . '/app/views/site/index.php');
        return true;
    }


    public function actionContact()
    {

        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            // if (!User::checkEmail($userEmail)) {
            //     $errors[] = 'Неправильный email';
            // }

            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору 
                $adminEmail = 'php.start@mail.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        require_once(ROOT . '/app/views/site/contact.php');
        return true;
    }
}
