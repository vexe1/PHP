<?php
$output=array_slice($argv, 1);
$string = implode(" ", $output);
$outputData = urlencode($string);
if ($outputData){
$url = "https://www.googleapis.com/books/v1/volumes?q=$outputData&maxResults=20";
$books = file_get_contents($url);
if($books) {
    $dataJson = json_decode($books);

    $arrayBooks = $dataJson->items;
        foreach($arrayBooks as $oneBook){
            $id = $oneBook->id;
            $title = $oneBook->volumeInfo->title;
            $authors = $oneBook->volumeInfo->authors[0];
            $res = fopen("./books.csv", "a");
            fwrite($res,  $id . ' ' . $title . ' ' . $authors . "\r\n");
            fclose($res);
        }
        if ($res) {
            echo "Добавлены результаты по запросу: $outputData" . PHP_EOL;
        } else {
                echo "Не записано" . PHP_EOL;
        }
} else{
    echo "Сервер не доступен!";
}} else {
    echo 'Ошибка! Аргументы не заданы, укажите название книги!' . PHP_EOL;
}
