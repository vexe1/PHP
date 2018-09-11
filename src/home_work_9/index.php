<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=Home_work_9;charset=utf8', 'admin', 'admin');
$sth = $pdo->prepare("SELECT * FROM books");
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Библиотека успешного человека</title>
    <link href='main.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="search">
    <form action="index.php" method="GET">
        <h1>Библиотека успешного человека</h1>
        <div><input class="sub_frame" type="text" name="isbn" placeholder="ISBN"></div>
        <div><input class="sub_frame" type="text" name="name" placeholder="Название книги"></div>
        <div><input class="sub_frame" type="text" name="author" placeholder="Автор книги"></div>
        <div><input type="submit" value="Поиск" ></div>
    </form>
</div>
    <table>
        <tr>
            <td>Название</td>
            <td>Автор</td>
            <td>Год выпуска</td>
            <td>Жанр</td>
            <td>ISBN</td>
        </tr>
        <? foreach ($result as $value) { ?>
            <tr>
                <td><? echo $value ["name"] ?></td>
                <td><? echo $value ["author"] ?></td>
                <td><? echo $value ["year"] ?></td>
                <td><? echo $value ["genre"] ?></td>
                <td><? echo $value ["isbn"] ?> </td>
            </tr>
        <? } ?>
    </table>

</body>
</html>