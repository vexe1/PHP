<?

// $handle = fopen("visa_list.csv", "r");
// while (($data = fgetcsv($handle)) !== FALSE) {
//     $country = explode (",", $data[1]);
//     $visa = explode (",", $data[4]);
//    var_dump ($visa);
   
// }

$csv = array();
$lines = file('visa_list.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value);
}
// print_r($csv[2]);
//  $output = array_slice ($csv[176], 2, -1);

$output = array_keys($csv[176], 3);

 var_dump ($output);

