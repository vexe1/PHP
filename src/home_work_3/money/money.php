<?
var_dump($argv);
$res = fopen("./test.csv", "w");
for ($i=0; $i < count($argv) ; $i++) { 
    $item = $argv[$i];
    fwrite($res,implode(" - ", $item). "\n");
}
fclose($res);
print_r(file_get_contents("./test.csv"));