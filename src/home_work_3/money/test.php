<?
var_dump($argv);
$input = $argv;
// var_dump($input); exit;

// тест на начало строки
if (is_numeric($argv[1]) && (!is_numeric($argv[2]))) {
    echo "Нашел mac";
} else {
       echo 'Ошибка! Аргументы не заданы, укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}';
    }


// if (preg_match(/[0-9]{10},    , $input)) {
//     $collocation = array_slice($argv, -2);
//     $collocation = implode(" ", $collocation);
//     $amount_str = "$date, $argv[1], $collocation\r\n";

// if (is_writable($myList)) {
//    file_put_contents($myList, $amount_str, FILE_APPEND);
// } else {
//    echo 'Ошибка открытия для записи';
// } 
// } else {
//    echo 'Ошибка! Аргументы не заданы, укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}';
// }


