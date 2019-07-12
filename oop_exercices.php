<?php

/*
	Part 1 :

	Create a class 'CoffeeCup' with these properties :
		- quantity (cl)
		- brand (brand of coffee)
		- temperature

	All properties are private

	Create all getters and setters for this class.

	Use example :

	$myCoffee = new CoffeeCup();
	$myCoffee->setQuantity(20);
	$myCoffee->setBrand('Malongo');
	$myCoffee->setTemperature(65);
*/

class CoffeeCup{
	private $quantity;
	private $brand;
	private $temperature;
	private $volume;
	/*
	public function setQuantity($quantity){
	$this->quantity = $quantity;
	}
	*/
	public function setVolume($volume){
	$this->quantity = $volume;
	}
/*
	public function setBrand ( $brand){
		$this->brand = $brand;
		}
		*/
	public function reHeat($reHeat){
	$this->reHeat = $reHeat;
	}
	public function coolDown($coolDown){
	$this->coolDown = $coolDown;
	}

	public function getQuantity(){
		return $this->quantity;
	}
	
	public function getBrand(){
		return $this->brand;
	}
	public function getTemperature(){
		return $this->temperature;
    }
    
    public function getVolume(){
        return $this->volume;
        }

	public function sip(int $myCoffee){
		if( $myCoffee < 0 ){
			$this->quantity=0;
		echo 'You sipe '.$myCoffee.' cl, left '.$this->quantity .' cl of coffee'.'<br>';
		}else {
			$this->quantity -= $myCoffee;
			echo 'Quantity :'.$this->quantity. '<br>';			
		}
		
    }
    
    public function refill(){
		$this->quantity = $this->getVolume();
        echo "Mug full again".'<br>';
    }

    public function __construct($volume , $brand , $temperature )
    {
		$this->volume=$volume;
		echo 'Volume :'.$this->volume .'<br>';
		$this->quantity=$volume;
		$this->brand= $brand;
		$this->temperature = $temperature;
		echo 'brand :'.$this->brand.'<br>';
		echo 'temperature :'. $this->temperature.'<br>';
	}

	public function displayInfos()
    {
        return strtoupper($this->getColor());
    }
}



 $myCoffee = new CoffeeCup(50,'hakunamatata',10);

//$myCoffee->setQuantity(20);
//$myCoffee->setBrand('Malongo');
//$myCoffee->setTemperature(65);
$myCoffee->sip(5);
$myCoffee->refill();
$myCoffee->setVolume(50);
$myCoffee->reHeat(7);
$myCoffee->coolDown(10);

while($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
	$quantityToSip = rand(1, 6);
	$myCoffee->sip($quantityToSip);
	$myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}

/*
	Part 2 :

	Create these methods :
		- sip : Accept one integer as parameter which match the quantity we want to drink.
		When calling this method, program will display 'Remain XX cl of coffee'
		Example :
		$myCoffee->sip(3);
		- refill : no arguments and just fill to maximum
		When calling this method, program will display 'Mug full again';
		Example :
		$myCoffee->refill();

*/
/*
	Part 3 :
	Now we save the max. volume of the mug (cl) in the object.
	You need to add another properties $volume
	We define the volume of the mug when creating the object but can't edit later.
	Example :
	$myCoffee = new CoffeeCup(20); // Mug with 20 cl volume
	$otherCoffee = new CoffeeCup(33); // Another mug with 33 cl volume
*/
/*
	Part 4 : 
	Change the method 'refill' to make the fill automatic
*/
/* 
	Part 5 :

	- Delete the setQuantity() method.
		We can no longer edit the quantity of the coffee.
		We can only fill or sip the cup.
	- During the creation of the cup, make the quantity automatically define at the maximum
	 	possible (volume of the cup).
	- Delete the setBrand() method. You can't change the brand once the coffe is in the cup.
	- Change the constructor to also accept the brand of the cup as an argument.
	- Replace the setTemperature method by reHeat() and coolDown().
		Both of them will accept, as argument, the number of degree to add or remove to the 
		temperature.
		Both of them will display the new temperature of the coffee.
	- Add the temperature as an argument in your constructor.

*/
/* 

	Step 6 :
	
	Edit the sip() method to make sure it's enough coffee left in the cup.
	If there is not enough coffee, define the quantity to 0
	Display also a message, example : "You sipe X cl, left Y cl of coffee" 

	Now we should be able to run this code :

	$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, brand Malongo, 65 °C

	while($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
	    $quantityToSip = rand(1, 6);
	    $myCoffee->sip($quantityToSip);
	    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
	}

*/