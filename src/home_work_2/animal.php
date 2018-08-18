<?php
// Задание 1 ----------------------------------------------
$arr[0][0]="Asia"; 
$arr[0][1]="Africa";
$arr[0][2]="Australia";
$arr[0][3]="South America";
$arr[0][4]="North America";
$arr[0][5]="Europe";
$arr[0][6]="Antarctida";
//ASIA
$arr[1][0]="Malayan Tapir";
$arr[1][1]="Indian Rhinoceros";
$arr[1][2]="Slow Loris";
$arr[1][3]="Asian Elephant";
$arr[1][4]="Giant Panda";
$arr[1][5]="Indian Cobra";
$arr[1][6]="Lesser Bird of Paradise";
$arr[1][7]="Japanese Macaque";
$arr[1][8]="Bactrian Camel";
$arr[1][9]="Bengal Tiger";
//AFRICA
$arr[2][0]="African buffalo";
$arr[2][1]="African wild dog";
$arr[2][2]="Banded mongoose";
$arr[2][3]="Lammergeier";
$arr[2][4]="Blue wildebeest";
$arr[2][5]="Bongo";
$arr[2][6]="Cheetah";
$arr[2][7]="Cape gannet";
$arr[2][8]="Chimpanzee";
$arr[2][9]="Ethiopian wolf";
//AUSTRALIA
$arr[3][0]="Kangaroo";
$arr[3][1]="Echidna";
$arr[3][2]="Forest Kingfisher";
$arr[3][3]="Gould's Goanna";
$arr[3][4]="Dolphins";
$arr[3][5]="Bandicoot";
$arr[3][6]="Bilby";
$arr[3][7]="Platypus";
$arr[3][8]="Wombat";
$arr[3][9]="Macrotis";
//SOUTH AMERICA
$arr[4][0]="Giant Galapagos Tortoise";
$arr[4][1]="Anaconda";
$arr[4][2]="Capybara";
$arr[4][4]="Southern Right Whale";
$arr[4][3]="Piranha";
$arr[4][5]="Andean Condor";
$arr[4][6]="Llama";
$arr[4][7]="Caiman";
$arr[4][8]="Tapir";
$arr[4][9]="Coatimundi";
//NORTH AMERICA
$arr[5][0]="Arizona Bark Scorpion";
$arr[5][1]="Jaguar";
$arr[5][2]="Canadian Goose";
$arr[5][4]="Eastern Moose";
$arr[5][3]="North American Beaver";
$arr[5][5]="American Bison";
$arr[5][6]="American Alligator";
$arr[5][7]="Mountain Lion";
$arr[5][8]="Raccoon";
$arr[5][9]="Bald Eagle";
//EUROPE
$arr[6][1]="Karakurt Spider";
$arr[6][0]="Wild Boar";
$arr[6][2]="Alpine Long-Eared Bat";
$arr[6][4]="Norwegian Lemming";
$arr[6][3]="Saiga";
$arr[6][5]="Pine Marten";
$arr[6][6]="Raccoon Dog";
$arr[6][7]="Reindeer";
$arr[6][8]="Camargue Horse";
$arr[6][9]="Arctic Fox";
//ANTARCTIDA
$arr[7][1]="Emperor penguins";
$arr[7][0]="Whale species";
$arr[7][2]="Weddell seals";
$arr[7][4]="Krill";
$arr[7][3]="Wandering albatross";
$arr[7][5]="Snow petrel";
$arr[7][6]="Antarctic Land Invertebrates";
$arr[7][7]="Antarctic skua";
$arr[7][8]="Blue eyed shag";
$arr[7][9]="Giant petrel";
// Выводим элементы массива:
echo "<h3>".$arr[0][0].":</h3>";
for ($a=0; $a<=7; $a++) {
echo $arr[1][$a]."<br>";
}
echo "<h3>".$arr[0][1].":</h3>";
for ($b=0; $b<=7; $b++) {
echo $arr[2][$b]."<br>";
}
echo "<h3>".$arr[0][2].":</h3>";
for ($c=0; $c<=7; $c++) {
echo $arr[3][$c]."<br>";
}
echo "<h3>".$arr[0][3].":</h3>";
for ($d=0; $d<=7; $d++) {
echo $arr[4][$d]."<br>";
}
echo "<h3>".$arr[0][4].":</h3>";
for ($e=0; $e<=7; $e++) {
echo $arr[5][$e]."<br>";
}
echo "<h3>".$arr[0][5].":</h3>";
for ($f=0; $f<=7; $f++) {
echo $arr[6][$f]."<br>";
}
echo "<h3>".$arr[0][6].":</h3>";
for ($g=0; $g<=7; $g++) {
echo $arr[7][$g]."<br>";
}

echo '<br>';
// Задание 2 ----------------------------------------------

$animals = array(
    'Asia' => array ('Malayan Tapir', 'Indian Rhinoceros', 'Slow Loris', 'Asian Elephant', 'Giant Panda', 'Indian Cobra', 'Lesser Bird of Paradise', 'Japanese Macaque','Bactrian Camel', 'Bengal Tiger'),
    'Africa' => array ('African buffalo', 'African wild dog', 'Banded mongoose', 'Lammergeier', 'Blue wildebeest', 'Bongo', 'Cheetah', 'Cape gannet', 'Chimpanzee', 'Ethiopian wolf'),
    'Australia' => array ('Kangaroo', 'Echidna', 'Forest Kingfisher', 'Goulds Goanna', 'Dolphins', 'Bandicoot', 'Bilby', 'Platypus', 'Wombat', 'Macrotis'),
    'South America' => array ('Giant Galapagos Tortoise', 'Anaconda', 'Capybara', 'Southern Right Whale', 'Piranha', 'Andean Condor', 'Llama', 'Caiman', 'Tapir', 'Coatimundi'),
    'North America' => array ('Arizona Bark Scorpion', 'Jaguar', 'Canadian Goose', 'Eastern Moose', 'North American Beaver', 'American Bison', 'American Alligator', 'Mountain Lion', 'Raccoon', 'Bald Eagle'),
    'Europe' => array ('Karakurt Spider', 'Wild Boar', 'Alpine Long-Eared Bat', 'Norwegian Lemming', 'Saiga', 'Pine Marten', 'Raccoon Dog', 'Reindeer', 'Camargue Horse', 'Arctic Fox'),
    'Antarctida' => array ('Emperor penguins', 'Whale species', 'Weddell seals', 'Krill', 'Wandering albatross', 'Snow petrel', 'Antarctic Land Invertebrates', 'Antarctic skua', 'Blue eyed shag', 'Giant petrel')
    );
         
    // $arrayFinal = array(); 
    // foreach($animals as $areaName => $animalArray) {
    //     foreach ($animalArray as $animalName) {
    //         if (strpos($animalName, ' ') !== false) { 
    //             array_push($arrayFinal, $animalName);
    //         }
    //     }
    // }
    // print_r($arrayFinal); 

    $result = [];
    foreach ($animals as $continent) {
        $result = array_merge($result, array_filter($continent, function ($item){ return count(explode(' ', $item)) === 2; }) );
    }
    print_r($result);
?>