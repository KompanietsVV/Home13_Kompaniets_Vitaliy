<?php
/**
 * Обработчик формы авторизации
 * Site: http://bezramok-tlt.ru
 * Авторизация пользователя
 */
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysqli = new mysqli('localhost', 'root', '', 'my_db');

    /* Проверка соединения */
    if (mysqli_connect_errno()) {
        printf("Подключение невозможно: %s\n", mysqli_connect_error());
        exit();
    }

//Если нажата кнопка то обрабатываем данные
    if (isset($_POST['submit'])) {
        if (empty($_POST['email']))
            $err[] = 'Не введен Логин';

        if (empty($_POST['pass']))
            $err[] = 'Не введен Пароль';

        //Проверяем наличие ошибок и выводим пользователю
        if (count($err) > 0)
            echo showErrorMessage($err);
        else {
            /*Создаем запрос на выборку из базы
            данных для проверки подлиности пользователя*/
            $sql = 'SELECT * 
				FROM `' . BEZ_DBPREFIX . 'reg`
				WHERE `login` = "' . escape_str($_POST['email']) . '"
				AND `status` = 1';
            $res = mysqlQuery($sql);

            //Если логин совподает, проверяем пароль
            if (mysql_num_rows($res) > 0) {
                //Получаем данные из таблицы
                $row = mysql_fetch_assoc($res);

                if (md5(md5($_POST['pass']) . $row['salt']) == $row['pass']) {
                    $_SESSION['user'] = true;

                    //Сбрасываем параметры
                    header('Location:' . BEZ_HOST . 'less/reg/?mode=auth');
                    exit;
                } else
                    echo showErrorMessage('Неверный пароль!');
            } else
                echo showErrorMessage('Логин <b>' . $_POST['email'] . '</b> не найден!');
        }

    }

}