<?php
require_once 'Joueur.php';

class Parc {

    private array $dinosaures = [];
    private array $figther = [];
    private int $money;
    private array $listeDinosaures = [];
    

    public function createDino (Dinosaure $Dinosaure) {
        array_push($this->dinosaures, $Dinosaure);
    }

    // public function createPlayer(Player $Player) {
        
    // }
    
    public function displayCombatStat($type) {
        foreach($this->dinosaures as $dino) {

            echo $dino->displayCombatStat($type);
            
        }
    }


    public function displayDinosaursPrice($type){
        foreach($this->dinosaures as $dino) {
             
                echo $dino->displayInfosPrice($type);
            }
        }
    
    public function displayDinosaursbuy(){
        foreach($this->dinosaures as $dino){
            echo $dino->displayInfosBuy();
        }
    }

    public function displayDinosaurs(){
        foreach($this->dinosaures as $dino){
            echo $dino->displayInfosBasic();
        }
    }

    public function displayDinosaursInfos(){
        foreach($this->dinosaures as $dino){
            echo $dino->displayInfosDetails();
        }
    }

    public function feed(){
        foreach($this->dinosaures as $dino){
            $dino->eat();
        }
        
    }

    public function play(){
        foreach($this->dinosaures as $dino){
            $dino->play();
        }
        
    }

    public function rest(){
        foreach($this->dinosaures as $dino){
            $dino->sleep();
        }
        
    }
    
    public function fight() {
        foreach($this->dinosaures as $dino) {
            if($dino->mood < 20){
        array_push($this->fighter, $dino);
            }
        }
    }

    
}