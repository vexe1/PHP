<?php

$text = fopen("visa_list.csv","r");
$row1 = fgetcsv($text);
$country = ($argv[1]);

while(!feof($text)){
    $massiv[]=fgetcsv($text);
}
for($i=0;$i<count($row1);$i++) {
    foreach($massiv as $item) {
        $new[$row1[$i]][]=$item[$i];
    }
}

if ($result = in_array($country, $new['Перечень стран'])) {
    $countryKey = array_search($country, $new['Перечень стран']);
    if (array_key_exists($countryKey, $new['Режим въезда с общегражданским паспортом']));
    echo($countryKey . " " . $country . " " . $new['Режим въезда с общегражданским паспортом'][$countryKey]); exit;

} else {
    echo "Введите правильное название страны";
}
