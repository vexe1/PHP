<?

$csv = array();
$lines = file('visa_list.csv', FILE_IGNORE_NEW_LINES);
foreach ($lines as $key => $value) {
    $csv[$key] = str_getcsv($value);
}

foreach ($csv[170] as $one => $second) {
    if (($one + 1) % 2 == 0) {
    var_dump ($second);

    }}

