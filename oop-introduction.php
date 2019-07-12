<?php

/*
pros of OOP:
    - Reusability
    - Roles seperation

    Warning you can't re-declare a class: give a different name to each class

    Declare a class:
*/
/*class Car
{ }
*/
// Create an object : Instance of a class 
//$myCar = new Car();

// We can create as much objects as we want
//$ferrari = new Car();
/*
    classes have 'internal variables'
, called 'properties'
the have  also 'internal functions', called 'methods'

*/
/*
class Car
{
    private $color; // Color of the car(red , blue ..)
    public $brand; // brand of the car (ferrari, bmw , audi .. )
    public $category; // Category of the car
    
    public function setColor($newColor)
    {//Pulic method (accessible from an object)
        $this->color = $newColor; // Edit the property
    }
    
    public function getColor()
    { 
        return $this->color; //Return the property
    }
}

//Methods
$myCar = new Car();
$anotherCar = new Car();
// I can access (accessible from an object)
$myCar->brand = 'Ferrari';
//I can't acces private properties:
//$myCar->color = 'red';
// But i can use public methods
$myCar->setColor('red');
$anotherCar->setColor('yellow');
// display the color of the car 
//echo $myCar->getColor();
//Create a variable which is link to the same object
var_dump($myCar);
var_dump($anotherCar);

/* 
A method in a method 

*/


class Car
{
    private $color; // Color of the car(red , blue ..)
    public $brand; // brand of the car (ferrari, bmw , audi .. )
    public $category; // Category of the car
    
    //Method

    public function __construct($color, $brand){
        $this->color = $color;
        $this->brand = $brand;
    }
    public function setColor($newColor)
    {//Pulic method (accessible from an object)
        $this->color = $newColor; // Edit the property
    }
    
    public function getColor()
    { 
        return $this->color; //Return the property
    }
    public function __toString()
    {
        return "my car is a " .$this->brand." color:".$this->color;
    }

   

    public function getColorUpperCase()
    {
        return strtoupper($this->getColor());
    }
}
$myCar= new Car('red' , 'ferrari');
echo $myCar;
/*  
    Good practices:
    -One class = One file
    -Capital letter for the first letter and for the other words
    example : HelloWorld / Car / CoffeeMug

*/