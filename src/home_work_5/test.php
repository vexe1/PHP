<?
$q1 = $_GET['q1'];
$q2 = $_GET['q2'];
$result = 0;

if ($q1 == "1000000000") {
    $result += 25;
    echo "1. OK <br/>";
    }
    else {
        echo "1. Ответ неверный  <br/>";
    }

    if ($q2 == "Конго") {
        $result += 25;
        echo "2. OK <br/>";
        }
    else {
        echo "2. Ответ неверный  <br/>";
    }
    ?>