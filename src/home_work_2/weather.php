<?
$url = "http://api.openweathermap.org/data/2.5/weather?APPID=ad0cbfc4817e1f6adf5eb92e02662145&q=Bishkek&units=metric";
$data = file_get_contents($url);
if($data){
    $dataJson = json_decode($data);
    $arrayDays = $dataJson->main;
        echo "Температура: " . $arrayDays->temp . "<br/>"; 
        echo "Давление: " . $arrayDays->pressure . "<br/>"; 
        echo "Влажность: " . $arrayDays->humidity . "<br/>"; 
        echo "<hr/>";
    }
else{
    echo "Сервер не доступен!";
}