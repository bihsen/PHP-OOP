<?php

class Equipment{ 
    private $name;
    private $description;
   private $BonusAttack;
   private $BonusDefense;
   private $Bonushealth;

    public function __construct($name,$description,$BonusAttack,$BonusDefense , $Bonushealth)
    {
        $this->name=$name;           
        $this->description=$description;   
        $this->BonusAttack=$BonusAttack;   
        $this->BonusDefense=$BonusDefense;   
        $this->Bonushealth=$Bonushealth;           

    }

    public function __toString()
    {
        $string = 'Desc : '. $this->description . '<br>';
        $string = 'Type : '. $this->name . '<br>';
    }

    
 
    
}