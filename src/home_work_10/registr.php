<?php
require_once 'functions.php';

if(isset($_POST['login'])) {
    $stmt = $pdo->prepare("SELECT id FROM user WHERE login = ?");
    $stmt->bindParam(1, $login);
    $login = $_POST['login'];
    $stmt->execute();
    $found = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if ($found) {
        echo "login занят!";
    } else {
        header('Location: index.php');
        $stmt = $pdo->prepare("INSERT INTO user(login, password) VALUES(?,?)");
        $stmt->bindParam(1, $login);
        $stmt->bindParam(2, $password);
        $login = $_POST['login'];
        $password = $_POST['password'];
        $stmt->execute();
        exit();
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
        <h2>Регистрация</h2>
        <input type="text" name="login" placeholder="Введите логин" class="form-control">
        <input type="text" name="password" placeholder="Введите пароль" class="form-control">
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Зарегистрироваться" >
    </form>
</div>
</body>
</html>

