<!--1. Инкапсуляция позволяет нам объединить  данные и методы, работающие с ними, в классах и скрыть детали реализации от пользователей.-->
<!---->
<!--2.  +-->
<!--        Возможность расширения-->
<!--        Код локализирован, менеьше вероятность ошибок-->
<!--        Составление сложных объектов из простых-->
<!--        Возможно в совокупности требует меньше времени на разработку-->
<!---->
<!--    --->
<!--        Проектирование классов-->
<!--        Наследование-->


<? class Car
{
    public $price = 100000;
    public $color = 'white';

    public  function setPrice($price)
    {
    $this->price = $price;
    }
}

$audi = new Car();
$bmw = new Car();

?>

<? class TV
{
    public $price = 100;
    public $diagonal = 32;
    public $panel = 'LED';

    public function getDiagonal()
    {
        return $this->diagonal;
    }
}

$sony = new TV();
$samsung = new TV();
$toshiba = new TV();

?>

<?
class Fridge
{
    public $price = 200;
    public $color = 'white';
    public $value = 50;
    public $height = 150;

    public function getHeight()
    {
        return $this->height;
    }
}
$lg = new Fridge();
$bosch = new Fridge();
?>

<?
class Duck
{
    public $color = 'yellow';
    public $weight = 500;
    public $ducklings = 5;

    public function getDucklings()
    {
        return $this->ducklings;
    }
}

$mallard = new Duck();
$pintail = new Duck();
?>

<?
class Good
{
    public $width = 1;
    public $height = 1;
    public $length = 1;
    public $weight = 1;

    public function getHeight()
    {
        return $this->height;
    }
}

$car = new Good();
$watermelon = new Good();
?>


