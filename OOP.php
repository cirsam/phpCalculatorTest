<?php
require_once("index.php");
class Animal extends MyTest
{

    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;

    function __construct(){
        echo "got here";
        mysqli_connect("","","","");

    }

    public static $number_of_animals=0; 

    const PI = "3.1432";
    
    function getSound(){
        return $this->sound=MyTest::sound;
    }

    function getName(){
       
        return $this->name;

    }

    function __get($name){
      return  $this->$name;
    }

    public function __set($name,$value){
        $this->$name=$value;
    }


}

$animal = new Animal();

$animal->name = "Samuel";
$animal->sound ="monw";
print $animal->getName();
print $animal->sound;


?>