<?
var_dump($argv);

$output=array_slice($argv, 1);
$data = implode(" ", $output);


$res = fopen("./list.csv", "a");
fwrite($res, $data."\r\n");


fclose($res);