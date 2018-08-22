<?

$url = "http://api.openweathermap.org/data/2.5/weather?APPID=ad0cbfc4817e1f6adf5eb92e02662145&q=Bishkek";

$data = @file_get_contents($url);
if($data){
    $json = json_decode($data, false);
    // print_r ($json->coord);
    $array = $json;
    foreach($array as $oneDay){
        echo "Температура: " . $oneDay->temp . "<br/>"; 
        echo "Влажность: " . $oneDay->humidity . "<br/>";
        echo "Давление: " . $oneDay->pressure . "<br/>";
        echo "Скорость ветра: " . $oneDay->speed . "<br/>";
                 echo "<hr/>";
    }
}else{
    echo "Сервер не доступен!";
}
