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
    <form  action="test.php" method="get">
        <?php foreach ($data as $i => $value) { ?>
            <fieldset>
                <legend><? echo $value ["questionName"] ?></legend>
                <label><input  type="radio"><? echo $value ["answer"][0] ?></label>
                <label><input  type="radio"><? echo $value ["answer"][1] ?></label>
                <label><input  type="radio"><? echo $value ["answer"][2] ?></label>
                <label><input  type="radio"><? echo $value ["answer"][3] ?></label>
            </fieldset>
        <? } ?>
        <input type="submit" value="Отправить">
    </form>
    <?php

    ?>
    </body>
    </html>

<?php



