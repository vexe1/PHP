<?php
require_once 'functions.php';
if (empty($_SESSION['user']) && empty($_SESSION['guest'])) {
    http_response_code(403);
    die('Доступ запрещен');
}  else{
    $dir = "./";
    if(is_dir($dir)) {
        echo $dir.' - СПИСОК ТЕСТОВ;<br>';
        $files = scandir($dir);
        foreach (glob("*.json") as $filename){
            echo '-файл: <a href="test.php?test='.$filename.'">'.$filename.'</a>;<br>';
        }
    } else echo $dir.' -такой директории нет;<br>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if (isset($_SESSION['user'])) {  ?>
        <ul class="btn">
            <li><a class="btn btn-lg btn-primary btn-block" href="admin.php">Добавить тест</a></li>
            <li><a class="btn btn-lg btn-primary btn-block" href="logout.php">Удалить тест</a></li>
            <li><a class="btn btn-lg btn-primary btn-block" href="logout.php">Выход</a></li>
        </ul>
    <?php } elseif ($_SESSION['guest']){ ?>
        <ul class="btn">
            <li><a class="btn btn-lg btn-primary btn-block" href="logout.php">Выход</a></li>
        </ul>
 <?php } ?>
</body>
</html>
