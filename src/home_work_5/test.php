<?
error_reporting(0);
$string = file_get_contents ($_GET['test']);
$data = json_decode($string, true);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form  action="test.php" method="get" name="form">
    <?php foreach ($data as $key=>$value){ ?>
        <fieldset>
            <legend>
                <?= $value['questionName'];?>
            </legend>
            <? foreach ($value['answer'] as $key => $answer){ ?>
                <label>
                    <input type="radio" value="<?=$answer?>" name="<?=$value['questionNumber']?>" ><?=$answer?>
                </label>
            <?}?>
        </fieldset>
    <?}?>
    <input type="submit" value="Отправить">
</form>
<? var_dump($_GET)?>
</body
</html>




