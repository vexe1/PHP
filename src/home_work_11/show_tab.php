<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netology";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$show_tab = $pdo->prepare("SHOW TABLES from netology");
$show_tab->execute();
$table_fields = $show_tab->fetchAll(PDO::FETCH_COLUMN);
//var_dump($table_fields); exit;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список таблиц</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<form action="tab.php" method="post">
    <h1>Список таблиц</h1>
    <table>
        <tr>
            <td>Таблицы</td>
            <td>Действие</td>
        </tr>
        <?php foreach ($table_fields as $value) {   ?>
            <tr>
                <td><?php echo $value?></td>
                <td>
                    <button type="submit" name="add" value="<?php echo $value ?>">Подробно...</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>
</body>
</html>
