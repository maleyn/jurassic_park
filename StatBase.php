<?php
require_once 'Dinosaure.php';

class StatBase extends Dinosaure {

        private int $hunger;
        private int $mood;
        private int $stamina;
    
 
    protected function __construct(string $type, string $style, int $vitesse, int $hp, int $attack, int $defence, int $price, string $name = "", int $hunger = 0, int $mood = 0, int $stamina = 0) {

        $stamina = 100;
        $mood = 100;
        $hunger = 0;
    
        parent::__construct($type, $style, $vitesse, $hp, $attack, $defence, $price, $name, $hunger, $mood, $stamina);
        

    }


}