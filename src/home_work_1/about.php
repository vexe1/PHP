<?php   
    $name = 'Роман';
    $age = '28';
    $email = 'klushin.roman@gmail.com';
    $city = 'Бишкек';
    $about = 'Менеджер в компании Мультитранс-Азия';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $name . ' - ' . $about ?></title>
    <style>
        dt {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Страница пользователя <?= $name ?></h1>
    <dl>
        <dt>Имя</dt>
        <dd><?=$name?></dd>
        <dt>Возвраст</dt>
        <dd><?=$age?></dd>
        <dt>Адрес электронной почты</dt>
        <dd><?=$email?></dd>
        <dt>Город</dt>
        <dd><?=$city?></dd>
        <dt>О себе</dt>
        <dd><?=$about?></dd>
    </dl>
    
    </body>
</html>

