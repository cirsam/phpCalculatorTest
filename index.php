<?php

class MyTest implements Behaviour
{

    private $name;
    private $sound;
    private $food;
    const pi = 3.14;
    protected static $countdata = 0;

    public function __construct(){
        echo MyTest::$countdata++;
    }
    
    public function run(){
        echo "run";
    }

    public function getName(){

        return $this->name;
 
     }

    // public function getSound(){

    //     return $this->sound;
 
    //  }

    function __get($conName){

        return $this->$conName;

    }

    function __set($conName,$val){
        if($conName=="name"){

            $this->name = $val;

        }
        
        if($conName=="sound"){

            $this->sound = $val;

        }

        if($conName=="food"){

            $this->food = $val;
            
        }
    }

    function __destruct(){
        //echo "this is the destructor";
    }


}

class myCat extends MyTest implements Behaviour{
        
}

interface Behaviour{
    function run();
}


// $testclass = new MyTest();
// $testclass->name = "Samuel";
// $testclass->sound = "sing";
// $testclass->food ="rice";

// echo $testclass->getName();
// echo $testclass->sound;
// echo $testclass->food;

// $catclass = new myCat();
// $catclass->name = "Vivian";
// $catclass->sound = "moe";
// $catclass->food ="cat food";

// echo $catclass->getName();
// echo $catclass->sound;
// echo $catclass->food;

//echo "Constanct = "+ $testclass::pi;
//echo "count = "+ $testclass::$countdata;


?>