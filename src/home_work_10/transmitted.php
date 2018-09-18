<?php
require_once 'functions.php';

if (isset($_POST['transmitted'])) {
    $stmt = $pdo->prepare("SELECT user_id, description, assigned_user_id FROM task JOIN user ON user.id=task.assigned_user_id WHERE task.user_id= ? AND task.assigned_user_id != ?");
    $stmt->bindParam(1, $user_id);
    $stmt->bindParam(2, $id);
    $user_id = (int)$_SESSION['user_id'];
    $id = (int)$_SESSION['user_id'];
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if (isset($_POST['back'])){
    header("Location: addtask.php");
    die();
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
<form action="transmitted.php" method="post">
    <h1>Список переданных дел пользователя</h1>
    <input  type="submit" value="Назад" name="back" >
    <table>
        <tr>
            <td>Создатель</td>
            <td>Описание задачи</td>
            <td>Исполнитель</td>
        </tr>
        <?php foreach ($result as $value) {  ?>
        <tr>
            <td><?php echo $value ["user_id"] ?></td>
            <td><?php echo $value ["description"] ?></td>
            <td><?php echo $value ["assigned_user_id"] ?></td>
        </tr>
        <?php } ?>
    </table>
</form>
</body>
</html>
