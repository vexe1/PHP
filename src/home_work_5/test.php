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
                <?php foreach ($value['variants'] as $k => $variants){ ?>
                    <label>
                        <input type="radio" value="<?=$variants?>" name="<?=$value['question']?>" ><?=$variants?>

                    </label>
                <?php } ?>
                <input type="hidden" value="<?=$value['rightAnswer']?>" name="<?=$value['questionNumber']?> ">
            </fieldset>

<?php } ?>
        <input type="submit" value="Отправить">
    </form>
    <?php } elseif (isset($_GET)) {
                if ($_GET['answer_1'] == $_GET['q1_']){
                    echo "1. Правильный ответ <br>";
                } else {
                    echo "1. Ответ неверный <br>";
                }
                if ($_GET['answer_2'] == $_GET['q2_']){
                    echo "2. Правильный ответ <br>";
                } else {
                    echo "2. Ответ неверный <br>";
                }

    } ?>
</body>
</html>
