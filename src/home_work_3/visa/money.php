<?
var_dump($argv);
$date = date("d.m.y");
$amount = 0;
$myList = "./list.csv";
$output=array_slice($argv, 1);
$input = implode(" ", $output);

// Запись в файл
if (is_numeric($argv[1]) && (!is_numeric($argv[2])) || ($argv[1] === "--today")) {
$res = fopen("./list.csv", "a");
fwrite($res, $date. ' '. $input."\r\n");
fclose($res);
} else {
    echo 'Ошибка! Аргументы не заданы, укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}' . PHP_EOL;
 }
if ($res) {
    echo "Добавлена строка: $date $input" . PHP_EOL;
}
else {
    echo "Не записано" . PHP_EOL;
}

//сумма за день
if ($argv[1] === "--today") {
    if (file_exists($myList)) {
        $row = file($myList);
        for ($i=0; $i < count($row); $i++) { 
            $money = explode (" ", $row[$i]);
            if ($date === $money[0]) {
                (int)$amount += (int)$money[1]; 
            }
        }            
        echo "$date расход за день: $amount";
    } else {
        echo "Файл не существует";
    }
}