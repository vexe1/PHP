<?
$text = fopen("visa_list.csv","r");
$row1 = fgetcsv($text);
while(!feof($text)) 
    { 
        $massiv[]=fgetcsv($text);
    }
 
for($i=0;$i<count($row1);$i++)
    {
        foreach($massiv AS $item)
            {
                $new[$row1[$i]][]=$item[$i];
            }
    }
print_r($new);