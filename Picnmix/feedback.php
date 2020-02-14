<?php


    if ($_POST['e-mail'] == true) {
    $mail = $_POST['e-mail'];
    if ($_POST['name'] == true) {
        $name = $_POST['name'];
    } else {
        $name = 'Отправитель';
    };

    if ($_POST['telephone'] == true) {
        $phone = $_POST['telephone'];
    } else {
        $phone = 'Телефон';
    };

    if ($_POST['comment'] == true) {
        $comment = $_POST['comment'];
    } else {
        $comment = 'Сообщение отсутствует.';
    };

    $mess = '
    Отправитель: ' . $name . '
    E-mail: ' . $mail . '
    Телефон: ' . $phone . '
    Сообщение: ' . $comment;

    $email = 'picnmix@mail.com';
    $headers = "From: $email\r\nReply-To: $email" . "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8";

    mail('murzalev_97@mail.ru', 'Форма обратной связи', $mess, $headers);
    header("Refresh:5; index.html");
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1>Ваше сообщение успешно отправлено!</h1>
    </body>');
    $title = 'Сообщение отправлено';
} else {
    header("Refresh:5; index.html");

    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1 class="red">Ошибка отправки сообщения!</h1><p>Проверьте правильность заполненных данных.<br>
    Через 5 секунд вы вернетесь на главную страницу.');
    $title = 'Ошибка!';

};

echo ('<br/><br/>');

?>