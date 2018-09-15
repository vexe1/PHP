<?php
    require_once 'functions.php';


    if (!empty($_POST)) {
        if (login($_POST['login'], $_POST['password'])) {
            header('Location: list.php');
            die;
        } elseif (loginGuest()) {
            header('Location: list.php');
            die;
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" class="form-signin">
            <h2>REGISTRATION</h2>
            <input type="text" name="login" placeholder="Login" class="form-control">
            <input type="text" name="password" placeholder="Password" class="form-control">
            <h3>Войти как гость</h3>
            <input type="text" name="guest" placeholder="Guest" class="form-control">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>
    </div>
</body>
</html>
