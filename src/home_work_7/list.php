<?php
$dir = "./";
if(is_dir($dir)) {
    echo 'ДИРЕКТОРИЯ СУЩЕСТВУЕТ:<br>';
    $files = scandir($dir);
    for($i=0; $i<count($files); $i++){
        $format = array_pop(explode(".",$files[$i]));
        if( $format == 'json'){
            echo '-файл: <a href="test.php?test='.$files[$i].'">'.$files[$i].'</a>;<br>';
        }
    }
}
else echo $dir.' -такой директории нет;<br>';




