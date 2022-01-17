<?php

require_once "StatBase.php";
// creation des dinosaures avec un nom en input + 
// type , style , vitesse , hp , attack , defence, price

class Tyrannosaurus extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Tyrannosaurus", "Carnivore", 50, 120, 15, 40, 2000, $name);
    }
}

class Triceratops extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Triceratops", "Herbivore", 40, 120, 15, 40, 1500, $name);
    }
}

class Velociraptor extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Velociraptor", "Carnivore", 80, 80, 30, 20, 1700, $name);
    }
}

class Ankylosaurus extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Ankylosaurus", "Herbivore", 20, 90, 10, 30, 1200, $name);
    }
}

class Argentinosaurus extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Argentinosaurus", "Herbivore", 15, 150, 18, 30, 1300, $name);
    }
}

class Brachiosaurus extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Brachiosaurus", "Herbivore", 18, 130, 15, 25, 1400, $name);
    }
}

class Maiasaura extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("Maiasaura", "Herbivore", 25, 75, 10, 20, 1000, $name);
    }
}

class Stegosaurus extends StatBase{

    public function __construct(string $name = ""){
        parent::__construct("stegosaurus", "Herbivore", 25, 80, 10, 30, 1100, $name);
    }
}


