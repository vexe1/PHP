<?php

    $mas1 = array(1,3,2,6,5,9,6,4,2,3,5);

    /* Выводим парные */
    foreach ($mas1 as $key => $value) {
        if (($key + 1) % 2 == 0) {
            echo $value . '<br />';
        }
    }

    reset($mas1);

    /* Выводим не парные */
    foreach ($mas1 as $key => $value) {
        if (($key + 1) % 2 != 0) {
            echo $value . '<br />';
        }
    }



/**
 * Created by PhpStorm.
 * User: klush
 * Date: 29.08.2018
 * Time: 17:08
 */