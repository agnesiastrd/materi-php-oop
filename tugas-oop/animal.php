<?php
class Animal {
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $yell;

    // Methods
    function __construct($name, $legs, $cold_blooded, $yell)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blood = $cold_blooded;
        $this->yell = $yell;
    }
    function get_name() 
    {
        return $this->name;
    }

    function set_legs($legs) 
    {
        $this->legs = $legs;
    }
    function get_legs() 
    {
        return $this->legs;
    }

    function set_cold_blooded($cold_blooded) 
    {
        $this->cold_blooded = $cold_blooded;
    }
    function get_cold_blooded() 
    {
        return $this->cold_blooded;
    }

    function set_yell($yell) 
    {
        $this->yell = $yell;
    }
    function get_yell() 
    {
        return $this->yell;
    }
}

 $cat = new Animal("Kucing", "4", "cold blooded", "Meoowww");
 echo "Name : " . $cat->get_name();
 echo "<br>";
 echo "Legs : " . $cat->get_legs();
 echo "<br>";
 echo "Cold Blooded : " . $cat->get_cold_blooded(), "No";
 echo "<br>";
 echo "Yell : " . $cat->get_yell();
 echo "<br>";


?>