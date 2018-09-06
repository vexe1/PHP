<?
session_start();
if (empty($_SESSION['user'])){
    http_response_code(403);
    die('Доступ запрещен');
}

$uploadInfo = $_FILES['upload'];
if (isset($_POST['send'])) {
    $direct = './';
    if (is_uploaded_file($_FILES["upload"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $direct.$_FILES["upload"]["name"])) {
            header('Refresh: 3; url=http://rambler.ru/');
            echo 'Файл успешно загружен'; ?>
            <ul>
                <li>Размер файла: <?php echo $uploadInfo['size'] ?>байт</li>
                <li>Имя до загрузки: <?php echo $uploadInfo['name'] ?></li>
                <li>MIME-тип: <?php echo $uploadInfo['type'] ?></li>
            </ul>
          <?
        } else {
            die('Фйл не удалось загрузить');
        }
    } else {
        die ('Файл не удалось загрузить');
    }
}


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма загрузки</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <div>Тесты</div>
    <div><input type="file" name="upload"></div>
    <div><input type="submit" name = 'send' value="Отправить"></div>
</form>


</body>
</html>

