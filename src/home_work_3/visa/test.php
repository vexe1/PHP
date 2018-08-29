<?
$row =[
    'first' => [1,2,3,4,5],
    'second' => [1,2,3,4,5],
    'third' => [1,2,3,4,5]
];



function phpist_get_array_by_key ($array, $key){
    foreach ($row as $val){
        $ret[] = $val[$key];
        }
    return     $ret;
    }

    $tags_name  = phpist_get_array_by_key ($tags, '2');

    var_dump($tags_name);