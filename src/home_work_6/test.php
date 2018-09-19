<?php
if (empty($_GET)) {
    http_response_code(404);
    echo "Страница не найдена!";
    exit (1);
}
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
                if (!is_array($data)){
                    http_response_code(404);
                    echo "Страница не найдена!";
                    exit (1);
                } else {
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
        <input type="text" name = "name" placeholder="Введите Ваше имя">
        <input type="submit" value="Отправить">
    </form>
    <?php }} elseif (isset($_GET)) {
        $ot = 0;
        $not = 0;
        if ($_GET['answer_1'] == $_GET['q1_']){
            $ot++;
        } else {
            $not++;}
        if ($_GET['answer_2'] == $_GET['q2_']){
            $ot++;
        } else {
            $not++;}
        $i = imageCreate(200, 200);
        $name = $_GET['name'];
        $color = imageColorAllocate($i, 255, 255, 255);
        $color = imageColorAllocate($i, 255, 0, 0);
        imageString($i, 5, 30, 10, "Certificate", $color);
        imageString($i, 5, 30, 50, "$name", $color);
        imageString($i, 5, 30, 70, "Right answers =" . "$ot", $color);
        imageString($i, 5, 30, 90, "Wrong answers =" . "$not", $color);
        Header("Content-type: image/jpeg");
        imageJpeg($i);
        imageDestroy($i);
    }
?>
</body>
</html>
