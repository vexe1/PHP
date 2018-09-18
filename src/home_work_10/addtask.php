<?php

require_once 'functions.php';

if (empty($_SESSION['login'])) {
    http_response_code(403);
    die ('Доступ запрещен');
}

if (isset($_POST['task'])) {
    header("Location: addtask.php");
    $stmt = $pdo->prepare("INSERT INTO task (user_id, assigned_user_id, description, date_added) VALUES (?,?,?,NOW())");
    $stmt->bindParam(1, $user_id);
    $stmt->bindParam(2, $assigned_user_id);
    $stmt->bindParam(3, $description);
    $user_id = (int)$_SESSION['user_id'];
    $assigned_user_id = (int)$_SESSION['user_id'];
    $description = $_POST['task'];
    $stmt->execute();
}
$stmt = $pdo->prepare ("SELECT id, description, date_added, is_done, assigned_user_id FROM task WHERE user_id = ? ORDER by date_added");
$stmt->bindParam(1, $user_id);
$user_id = (int)$_SESSION['user_id'];
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare ("SELECT id, login FROM user");
$stmt->execute();
$login_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <form action="addtask.php" method="post">
        <h1>Список дел на сегодня для пользователя: <?php echo $_SESSION['login']?></h1>
        <div><input class="sub_frame" type="text" name="task" placeholder="Описание задачи"></div>
        <div><input  type="submit" value="Добавить" ></div>
        </form>
    <form action="transmitted.php" method="post">
        <input type="submit" name="transmitted" value="Переданные дела">
    </form>
    <form action="task_list.php" method="post">
        <input type="submit" name="task_list" value="Количество дел">
        <div><a class="nubex" href="logout.php">Выход</a></div>
    </form>

</div>
    <table>
        <tr>
            <td>ID</td>
            <td>Описание задачи</td>
            <td>Дата добавления</td>
            <td>Статус</td>
            <td>Действия</td>
            <td>Исполнитель</td>

        </tr>
<?php foreach ($result as $value) {  ?>
          <tr>
              <td><?php echo $value ["id"] ?></td>
              <td><?php echo $value ["description"] ?></td>
              <td><?php echo $value ["date_added"] ?></td>
              <td><?php if ($value ["is_done"] == 0){
                  echo "Не выполнено";
                  } else {
                  echo "Выполнено";
                  } ?></td>
              <td>
                  <form action="test.php" method="post">
                      <button type="submit" name="execute" value="<?php echo $value ["id"] ?>">Выполнить</button>
                      <button type="submit" name="delete" value="<?php echo $value ["id"] ?>">Удалить</button>
                      <select name="get">
                          <option value="" disabled selected>Передать другому пользователю</option>
                          <?php foreach ($login_list as $item) { ?>
                          <option value="<?php echo $item["id"]?>"><?php echo $item["login"]?></option>
                          <?php } ?>
                      </select>
                      <input type="hidden" name="id_name" value="<?php echo $value ["id"]?>" >
                      <input type="submit" value="Передать">
                  </form>
              </td>
              <td><?php echo $value["assigned_user_id"] ?></td>
          </tr>
        <?php } ?>
    </table>

</body>
</html>