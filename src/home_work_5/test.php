<?
$string = file_get_contents ($_GET['test']);
$data = json_decode($string, true);
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form  action="test.php" method="get" name="form">
    <?php foreach ($data as $i => $value) { ?>
        <fieldset>
            <legend><? echo $value ["questionName"] ?></legend>
            <?php
            foreach ($value as $key => $val) {
                if (is_array($val))
                    foreach ($val as $num => $answer) { ?>
                        <label><input type="radio" value="<?echo $answer?>" name="<?echo $value["questionNumber"]?>" ><? echo $answer ?></label>
                    <? }} ?>
        </fieldset>
    <? } ?>
    <input type="submit" value="Отправить">
</form>
<?
if ($_GET[$value["questionNumber"]] === $value["rightAnswer"]) {
    echo "РЕШЕНИЕ ВЕРНО";
} else {
    echo "НЕВЕРНО";
}
?>
</body
</html>


