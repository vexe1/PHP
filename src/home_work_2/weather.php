<?php
    $request = 'http://api.openweathermap.org/data/2.5/weather?APPID=ad0cbfc4817e1f6adf5eb92e02662145&q=Bishkek';
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response);
    print_r($jsonobj);
?>
