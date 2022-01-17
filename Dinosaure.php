<?php

abstract class Dinosaure {

        private string $name;
        private string $type;
        private string $style;
        private int $maxhp;
        private int $attack;
        private int $defence;
        private int $vitesse;
        private int $hp;
        public int $price;

    protected function __construct(string $type, string $style, int $vitesse, int $maxhp, int $attack, int $defence, int $price, string $name, int $hunger, int $mood, int $stamina) {

        $this->name = $name;
        $this->type = $type;
        $this->maxhp = $maxhp;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->style = $style;
        $this->vitesse = $vitesse;
        $this->hunger = $hunger;
        $this->mood = $mood;
        $this->stamina = $stamina;
        $this->hp = $this->maxhp;
        $this->price = $price;
        
    }

    public function Health() {
        
        if ($this->hp < $this->maxhp / 5) {
            return "Faible";
        }
        if ($this->hp < $this->maxhp / 2) {
            return "Correct";
        }
        if ($this->hp <= $this->maxhp) {
            return "Bonne";
        }
    }

    public function Hunger() {
        
        if ($this->hunger > 80) {
            return "Affamé";
        }
        if ($this->hunger > 40) {
            return "légere faim";
        }
        if ($this->hunger >= 0) {
            return "Repu";
        }
    }

    public function Mood() {
        
        if ($this->mood < 20) {
            return "Enervé";
        }
        if ($this->mood < 60) {
            return "Ok";
        }
        if ($this->mood <= 100) {
            return "Joyeux";
        }
    }

    public function Stamina() {
        
        if ($this->stamina < 20) {
            return "Epuisé";
        }
        if ($this->stamina < 60) {
            return "Correct";
        }
        if ($this->stamina <= 100) {
            return "En forme";
        }
    }

    public function displayInfosPrice($type) {
        if($type == $this->type)
        echo $this->price;
    }

    public function displayName() {
    
        return $this->name;

    }

    public function displayType() {

        return $this->type;

    }
    
    public function displayInfosBuy() {
        
        echo "<pre>";
        echo "INFOS" . PHP_EOL;
        echo "Nom : " . $this->name . PHP_EOL . "Type : " . $this->type . PHP_EOL . "Alimentation : " . $this->style . PHP_EOL;
        echo "</pre>";
    }

    public function displayCombatStat($type) {
        if($type == $this->type){
        echo "ATT : " . $this->attack . " | " . "DEF : " . $this->defence . " | " . "HP : " . $this->hp;
        }
    }

    public function displayInfosBasic() {
        
        echo "<pre>";
        echo "INFOS" . PHP_EOL;
        echo "Nom : " . $this->name . PHP_EOL . "Type : " . $this->type . PHP_EOL . "Alimentation : " . $this->style . PHP_EOL;
        echo "Santé : " . $this->Health() . " | " . "Fatigue : " . $this->Stamina() . PHP_EOL . "Humeur : " . $this->Mood() . " | " . "Faim : " . $this->Hunger();
        echo "</pre>";
    }

    public function displayInfosDetails() {
        echo "<pre>";
        echo "INFOS" . PHP_EOL;
        echo "Nom : " . $this->name . PHP_EOL . "Type : " . $this->type . PHP_EOL . "Alimentation : " . $this->style;
        echo "</pre>";
        echo "<pre>";
        echo "STATS COMBAT" . PHP_EOL;
        echo "Vie : " . $this->hp . "/" . $this->maxhp . PHP_EOL .  "Vitesse : " . $this->vitesse . PHP_EOL . "Attack : " . $this->attack . PHP_EOL . "Defense : " . $this->defence;
        echo "</pre>";
        echo "<pre>";
        echo "STATS" . PHP_EOL;
        echo "Faim : " . $this->hunger . PHP_EOL . "Humeur : " . $this->mood . PHP_EOL . "Energie : " . $this->stamina; 
        echo "</pre>";
    }


    public function sleep() {
        $this->mood -= 5;
        $this->stamina += 10;
        $this->hunger -= 2;
    }

    public function play() {
        $this->mood += 10;
        $this->stamina -= 5;
        $this->hunger -= 5;
    }

    public function eat() {
        $this->hunger += 10;
        $this->stamina += 5;
    }

    public function fight() {
        
    }
}