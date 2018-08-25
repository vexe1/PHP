<?
var_dump($argv);
$date = date("d.m.y");
$today = 

$output=array_slice($argv, 1);
$data = implode(" ", $output);


$res = fopen("./list.csv", "a");
fwrite($res, $date. ' '. $data."\r\n");
if ($res) {
    echo "Добавлена строка: $date $data";
}
else {
    echo "Не записано";
}
fclose($res);