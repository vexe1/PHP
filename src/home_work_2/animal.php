<?php
// Задание 1 ----------------------------------------------
$continents = [
    "Asia" => ['Malayan Tapir', 'Indian Rhinoceros', 'Slow Loris', 'Asian Elephant', 'Giant Panda', 'Indian Cobra', 'Lesser Bird of Paradise', 'Japanese Macaque','Bactrian Camel', 'Bengal Tiger'],
    "Africa" => ['African buffalo', 'African wild dog', 'Banded mongoose', 'Lammergeier', 'Blue wildebeest', 'Bongo', 'Cheetah', 'Cape gannet', 'Chimpanzee', 'Ethiopian wolf'],
    "Australia" => ['Kangaroo', 'Echidna', 'Forest Kingfisher', 'Goulds Goanna', 'Dolphins', 'Bandicoot', 'Bilby', 'Platypus', 'Wombat', 'Macrotis'],
    "South America" => ['Giant Galapagos Tortoise', 'Anaconda', 'Capybara', 'Southern Right Whale', 'Piranha', 'Andean Condor', 'Llama', 'Caiman', 'Tapir', 'Coatimundi'],
    "North America" => ['Arizona Bark Scorpion', 'Jaguar', 'Canadian Goose', 'Eastern Moose', 'North American Beaver', 'American Bison', 'American Alligator', 'Mountain Lion', 'Raccoon', 'Bald Eagle'],
    "Europe" => ['Karakurt Spider', 'Wild Boar', 'Alpine Long-Eared Bat', 'Norwegian Lemming', 'Saiga', 'Pine Marten', 'Raccoon Dog', 'Reindeer', 'Camargue Horse', 'Arctic Fox'],
    "Antarctida" => ['Emperor penguins', 'Whale species', 'Weddell seals', 'Krill', 'Wandering albatross', 'Snow petrel', 'Antarctic Land Invertebrates', 'Antarctic skua', 'Blue eyed shag', 'Giant petrel']
];
foreach ($continents as $country => $animals) {
    echo "$country: <br>";
    foreach ($animals as $animal) {
        echo "-$animal <br>";
    }
}
echo '<br>';

// Задание 2 ----------------------------------------------

$continents = [
    "Asia" => ['Malayan Tapir', 'Indian Rhinoceros', 'Slow Loris', 'Asian Elephant', 'Giant Panda', 'Indian Cobra', 'Lesser Bird of Paradise', 'Japanese Macaque','Bactrian Camel', 'Bengal Tiger'],
    "Africa" => ['African buffalo', 'African wild dog', 'Banded mongoose', 'Lammergeier', 'Blue wildebeest', 'Bongo', 'Cheetah', 'Cape gannet', 'Chimpanzee', 'Ethiopian wolf'],
    "Australia" => ['Kangaroo', 'Echidna', 'Forest Kingfisher', 'Goulds Goanna', 'Dolphins', 'Bandicoot', 'Bilby', 'Platypus', 'Wombat', 'Macrotis'],
    "South America" => ['Giant Galapagos Tortoise', 'Anaconda', 'Capybara', 'Southern Right Whale', 'Piranha', 'Andean Condor', 'Llama', 'Caiman', 'Tapir', 'Coatimundi'],
    "North America" => ['Arizona Bark Scorpion', 'Jaguar', 'Canadian Goose', 'Eastern Moose', 'North American Beaver', 'American Bison', 'American Alligator', 'Mountain Lion', 'Raccoon', 'Bald Eagle'],
    "Europe" => ['Karakurt Spider', 'Wild Boar', 'Alpine Long-Eared Bat', 'Norwegian Lemming', 'Saiga', 'Pine Marten', 'Raccoon Dog', 'Reindeer', 'Camargue Horse', 'Arctic Fox'],
    "Antarctida" => ['Emperor penguins', 'Whale species', 'Weddell seals', 'Krill', 'Wandering albatross', 'Snow petrel', 'Antarctic Land Invertebrates', 'Antarctic skua', 'Blue eyed shag', 'Giant petrel']
];
function mySearch($continents){
foreach($continents as $country => $animals){
    foreach($animals as $val){
        if(preg_match("/\s+/", $val)){
           echo $country. " "."-". " ".$val."<br>";
        }
    }
}
}
mySearch($continents);

//Задание 3 --------------------------------------------------------






?>