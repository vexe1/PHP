<?php
if (isset($_GET['test'])) {?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form  action="test.php" method="get" name="form">
        <?php
        $string = file_get_contents($_GET['test']);
        $data = json_decode($string, true);
           foreach ($data as $key=>$value){?>

            <fieldset>
                <legend>
                    <?= $value['questionName'];?>
                </legend>
                <?php foreach ($value['answer'] as $k => $answer){ ?>
                    <label>
                        <input type="radio" value="<?=$answer?>" name="<?=$value['questionNumber']?>" ><?=$answer?>
                    </label>
                <?php } ?>
            </fieldset>

<?php } ?>

        <input type="submit" value="Отправить">
    </form>
<?php } elseif (isset($_GET['q1'])) {
                echo $_GET['q1'] . $_GET['q2'];
}
?>
</body>
</html>
