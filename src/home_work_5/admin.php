<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Простая форма загрузки файла</title>
</head>
<body>
<?php if (!isset($_FILES['upload']['tmp_name'])) : ?>
    <form method="POST" enctype="multipart/form-data">
        <input name="upload" type="file">
        <br><br>
        <input type="submit" value="Отправить">
    </form>
<?php else: ?>
<?php
    $uploadInfo = $_FILES['upload'];
    if (!move_uploaded_file($uploadInfo['tmp_name'], './'.$_FILES["upload"]["name"])) {
        echo 'Не удалось осуществить сохранение файла';
    }?>
    <ul>
        <li>Размер файла: <?php echo $uploadInfo['size'] ?>байт</li>
        <li>Имя до загрузки: <?php echo $uploadInfo['name'] ?></li>
        <li>MIME-тип: <?php echo $uploadInfo['type'] ?></li>
    </ul>
<?php endif; ?>
</body>
</html>