<?php
session_start();
if (isset($_POST)){
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результаты тестирования</title>
    <link href='main.css' rel='stylesheet' type='text/css'>
</head>
<body>
<table>
    <tr>
        <td>Номер вопроса</td>
        <td>Вопрос</td>
        <td>Ответ пользователя</td>
        <td>Правильный ответ</td>
        <td>Результат</td>
    </tr>
    <?php
    $string = file_get_contents( $_SESSION['test_name']);
    $data = json_decode($string, true);
        foreach ($data as $value) {
            $answer = array_shift($_POST);?>
                <tr>
                    <td><?php echo $value ["question"] ?></td>
                    <td><?php echo $value ["questionName"] ?></td>
                    <td><?php echo  $answer?></td>
                    <td><?php echo $value ["rightAnswer"] ?></td>
                    <td><?php if ($answer == $value ["rightAnswer"]){
                        echo "Правильно";
                        } else {echo "Неправильно";} ?>
                    </td>
                </tr>
        <?php } ?>
</table>
<?php } ?>
</body>
</html>
