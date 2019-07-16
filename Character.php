<?php

class Character {
    private $name;
    private $race;
    private $health;
    private $attack;
    private $defense;
    private $warCry;
    private $equipments;

    public function __construct($race){

        $this->race=$race;
        $this->attack = 10;
        $this->health=100;
        $this->defense = 5;
        $this->warCry = 'Arrrrhhhgggg';
        $this->equipment = array();
        
        if($race == 'Orcs'){          
            $this->bonusOrcs();
            $this->race = $race;
            $this->warCry = 'Banana Attack';
        } else if($race == 'Elfs'){
            $this->bonusElves();
            $this->race= $race;
            $this->warCry = 'HakunaMatata';
        }else if ($race == 'Humans'){
            $this->bonusHumans(); 
            $this->warCry = 'Zebbiii Attack';           
        }else{
            echo 'this race is not known';
        }

    }

    public function bonusOrcs(){
        $this->attack +=2;
        $this->defense +=2;
        $this->health -=10;
    }
    public function bonusElves(){
        //$this->attack +=2;
        $this->defense -=3;
    }
    public function bonusHumans(){
       
    }

    public function addEquipment($equipment){
        if (count($this->equipment) < 4){
            $sword=0;
            foreach ($this->equipment as $equip) {
                if($equip->getType() === 'sword')
                $sword++;
            }
            if($equip->getType()=== 'Shield'){
                //$this->equipments[] = $equipment;
                $shield++;
            }
        }
    }

    public function removeEquipment(){
        $this->equipment = null;
    }
    public function getEquipment(){
       return $this->equipment;
    }

}