<?
var_dump($argv);

$output=array_slice($argv, 1);
$data = implode(" ", $output);


print_r($data);
