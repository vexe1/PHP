<?php
    $rows   = array_map('str_getcsv', file('visa_list.csv'));
    $header = array_shift($rows);
    $csv    = array();
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);
    }
    var_dump ($csv);
?>