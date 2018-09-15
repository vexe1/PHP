

<?php
require_once 'functions.php';

if (!isAuthorized()) {
    http_response_code(403);
    die('Доступ запрещен');
} echo 'Привет' . " " . getAthorizedUser()['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Простая форма загрузки файла</title>
</head>
<body>
<?php if (!isset($_FILES['upload']['tmp_name'])) : ?>
    <!-- Данная форма будет показана, если не было загрузок -->
    <form method="POST" enctype="multipart/form-data">
        <input name="upload" type="file">
        <br><br>
        <input type="submit" value="Отправить">
    </form>

<?php else: ?>
<?php
//header('Location: list.php');
$uploadInfo = $_FILES['upload'];
    if (!move_uploaded_file($uploadInfo['tmp_name'], './'.$_FILES["upload"]["name"])) {
        echo 'Не удалось осуществить сохранение файла';
    }
    ?>
    <ul>
        <li>Размер файла: <?php echo $uploadInfo['size'] ?>байт</li>
        <li>Имя до загрузки: <?php echo $uploadInfo['name'] ?></li>
        <li>MIME-тип: <?php echo $uploadInfo['type'] ?></li>
    </ul>
<?php endif; ?>
<form method="post">
    <?php
$dir = "./";
if(is_dir($dir)) {
    echo $dir.' - СПИСОК ТЕСТОВ;<br>';
    $files = scandir($dir);
    foreach (glob("*.json") as $filename){
        echo '-файл: <a href="test.php?test='.$filename.'">'.$filename.'</a>;<br>';
    }}?>


</form>
</body>
</html>