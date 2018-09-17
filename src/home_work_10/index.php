<?php
require_once 'functions.php';


if(isset($_POST['login'])) {
    $sql = "SELECT * FROM user WHERE login = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['login']]);
    $found = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($found["0"]["password"] == $_POST["password"]) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['user_id'] = $found["0"]["id"];
        header("Location: addtask.php");
        die();
    } else {
        print "Вы ввели неправильный логин/пароль";
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
        <h2>АВТОРИЗАЦИЯ</h2>
        <input type="text" name="login" placeholder="Login" class="form-control">
        <input type="text" name="password" placeholder="Password" class="form-control">
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Войти">
        <a class="btn btn-lg btn-primary btn-block" href="registr.php">Регистрация</a>
    </form>
</div>
</body>
</html>
