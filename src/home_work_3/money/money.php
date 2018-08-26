<?
var_dump($argv);
$date = date("d.m.y");
$amount = 0;
$myList = "./list.csv";

$output=array_slice($argv, 1);
$data = implode(" ", $output);
// Запись в файл
$res = fopen("./list.csv", "a");
fwrite($res, $date. ' '. $data."\r\n");
if ($res) {
    echo "Добавлена строка: $date $data";
}
else {
    echo "Не записано";
}
fclose($res);
//сумма за день
if ($argv[1] === "--today") {
    if (file_exists($myList)) {
        $array = file($myList);
        for ($i=0; $i < count($array); $i++) { 
            $money = explode (";", $array[$i]);
            if ($date === $money[0]) {
                $amount += $money[1]; 
            }
        }            
        echo "$date расход за день: $amount";
    } else {
        echo "Файл не существует";
    }
}



