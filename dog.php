<?php
/*
you can use static properties (or methods) without instantiate the class.
we can access these directly using the name of class
*/

class dog{
    private $color;
    private $name;
    private $breed;

    public static function getLegsNumber()
    {
        return 4;
    }
}

//call to the static method
Dog::getLegsNumber();