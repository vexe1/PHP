<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netology";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST['add'])) {
    $_SESSION['table_name'] = $_POST['add'];
    $field = "`" . str_replace("`", "``", $_POST['add']) . "`";
    $stmt = $pdo->prepare("DESCRIBE $field;");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if (isset($_POST['delete'])) {
    header("Location: show_tab.php");
    $field = "`" . str_replace("`", "``", $_SESSION['table_name']) . "`";
    $column = "`" . str_replace("`", "``", $_POST['delete']) . "`";
    $stmt = $pdo->prepare("ALTER TABLE $field DROP COLUMN $column ;");
    $stmt->execute();
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список дел</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="search">
    <h1>Список полей таблицы: <?php echo $_POST['add']?></h1>
        <table>
            <tr>
                <td>Field</td>
                <td>Type</td>
                <td>Null</td>
                <td>Key</td>
                <td>Default</td>
                <td>Extra</td>
                <td>Действие</td>
            </tr>
            <?php foreach ($result as $value) {  ?>
                <tr>
                    <td><?php echo $value ["Field"] ?></td>
                    <td><?php echo $value ["Type"] ?></td>
                    <td><?php echo $value ["Null"] ?></td>
                    <td><?php echo $value ["Key"] ?></td>
                    <td><?php echo $value ["Default"] ?></td>
                    <td><?php echo $value ["Extra"] ?></td>
                    <td>
                        <form action="tab.php" method="post">
                            <button type="submit" name="delete" value="<?php echo $value ["Field"] ?>">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
</div>
</body>
</html>
