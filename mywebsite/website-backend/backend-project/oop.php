<?php 
class fruit {
    //properties
    public $name;
    public $color;
    protected $type;

    //methods
    function setName($name) {
        $this->name = $name; 
    }

    function getName() {
        return $this->name;
    }

    function setColor($color) {
        $this->color = $color; 
    }

    function getColor() {
        return $this->color;
    }

}

$apple = new fruit();
$apple->setName("Apple");

echo $apple->getName();

echo "<br>";
$mango = new fruit();
$mango->setName("Mango"); 

echo $mango->getName();

echo "<br>";

$mango->setColor("Green");
echo $mango->getColor(). "<br>";

class car {
    public $color;
    public $model;

    function __construct($model) {
        $this->model = $model;
    }

    function getModel() {
        return $this->model;
    }
}

$toyota = new car("2025");

echo $toyota->getModel(). "<br>";

$toyota->color = "Red";

echo $toyota->color. "<br>";

class vegetable extends fruit {
    public $nutrients;

    function setType($type){
        $this->type = $type;
    }

        function getType(){
           return $this->type;
    }

}

$ponkinLeaf = new vegetable();

$ponkinLeaf->setName("Ponkin-Leaf");

echo $ponkinLeaf->getName(). "<br>";

//$apple->type = "pome";
//echo $apple->type;

$ponkinLeaf->setType("Berry");

echo $ponkinLeaf->getType();

?>