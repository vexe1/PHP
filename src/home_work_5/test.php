<?php
session_start();
if (isset($_GET['test'])) {
    $_SESSION['test_name'] = $_GET['test'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ТЕСТ</title>
</head>
<body>
    <form  action="get.php" method="post" name="form">
        <?php
        $string = file_get_contents($_GET['test']);
        $data = json_decode($string, true);
           foreach ($data as $key=>$value){?>
            <fieldset>
                <legend>
                    <?= $value['questionName'];?>
                </legend>
                <?php foreach ($value['variants'] as $k => $variants){ ?>
                    <label>
                        <input type="radio" value="<?=$variants?>" name="<?=$value['question']?>"><?=$variants?>
                    </label>
                <?php } ?>
            </fieldset>
           <?php } ?>
        <input type="submit" value="Отправить">
    </form>
    <?php } ?>
</body>
</html>
