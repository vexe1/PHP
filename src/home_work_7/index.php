<?php
session_start();
define('USER_ADMIN', 'admin');
define('USER_PASS', 'pass');
    if (!empty($_POST)) {
        if ($_POST['name'] == USER_ADMIN && $_POST['password'] == USER_PASS){
            $_SESSION['user'] = $_POST['name'];
            header('Location: admin.php');
            die;
        } else {
            $errors[] = 'Неверный логин или пароль';
        }
    }
?>
<!doctype html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>
<form id="form" name="form" action="#" method="post">
    <div id="block">
        <label id="user" for="name">p</label>
        <input type="text" name="name" id="name" placeholder="Логин" required/>
        <label id="pass" for="password">k</label>
        <input type="password" name="password" id="password" placeholder="Пароль" required />
        <input type="submit" id="submit" name="submit" value="a"/>
    </div>
</form>
<div id="option">
    <p>Авторизация</p>
    <a href="#">Забыли пароль?</a>
</div>
</body>
</html>
