<?php
$dir = "./";
if(is_dir($dir)) {
    echo $dir.' - директория существует;<br>';
    $files = scandir($dir);
    foreach (glob("*.json") as $filename){
            echo '-файл: <a href="test.php?test='.$filename.'">'.$filename.'</a>;<br>';
        }}

else echo $dir.' -такой директории нет;<br>';