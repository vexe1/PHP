<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма запроса</title>
</head>
<body>
    <form action="admin.php" method="POST" enctype="multipart/form-data">
        <div>Имя</div>
        <div><input type="text" name="name"></div>
        <div>Фамилия</div>
        <div><input type="text" name="surname"></div>
        <div>Возраст</div>
        <div><input type="text" name="age"></div>
        <div>Номер телефона</div>
        <div><input type="text" name="phone"></div>
        <div><input type="submit" value="Отправить"></div>
    </form>

    <?
    $fh = fopen("./data_out.json", 'a');
    fwrite($fh, json_encode($_POST,JSON_UNESCAPED_UNICODE)."\n");
    fclose($fh);
    ?>
    
</body>
</html>
