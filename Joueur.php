<?php



class Player {

    public float $money;
    public string $name;
    public array $dinobasket = [];

public function __construct(string $name) {

    $this->money = 6000;
    $this->name = $name;
    
}

public function displayMoneyPlayer() {

    echo $this->money;

}

public function displayNamePlayer() {

    echo $this->name;

}

public function createDino (Dinosaure $Dinosaure) {
    array_push($this->dinobasket, $Dinosaure);
}

public function displayDinoBasket() {
    foreach($this->dinobasket as $dino){
        
        echo $dino->displayType();
        
    }
    
}


}
