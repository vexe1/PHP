<?
$string = file_get_contents(__DIR__ . '/file.json');
$json = json_decode($string, true);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>№</td>
            <td>ИМЯ</td>
            <td>ФАМИЛИЯ</td>
            <td>АДРЕС</td>
            <td>НОМЕР ТЕЛЕФОНА</td>
        </tr>
        <? foreach ($json as $i => $value) { ?>
            <tr>
                <td><? echo $i ?></td>
                <td><? echo $value ["firstName"] ?></td>
                <td><? echo $value ["lastName"] ?></td>
                <td><? echo $value ["address"] ?></td>
                <td><? echo $value ["phoneNumber"] ?> </td>
            </tr>
       <? } ?>
        
    </table>
</body>
</html>
