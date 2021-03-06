
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurassic Parc</title>
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<?php 
// session_start();
require_once 'Toutlesdinosaures.php';
require_once 'Parc.php';
require_once 'StatBase.php';
require_once 'Joueur.php';
// $id_session = session_id();
// echo $id_session;
?>

<body>
<header>
<button id="newgame" type="button" onclick="DisplayUi()<?php 

$player = new Player('moi');
$parc = new Parc();
$parc->createDino(new Tyrannosaurus('Bob'));
$parc->createDino(new Triceratops('John'));
$parc->createDino(new Velociraptor('Tom'));
$parc->createDino(new Ankylosaurus('Henry'));
$parc->createDino(new Argentinosaurus('Mike'));
$parc->createDino(new Brachiosaurus('Hans'));
$parc->createDino(new Maiasaura('Victor'));
$parc->createDino(new Stegosaurus('Conrad'));
// $player->createDino(new Ankylosaurus('Henry'));
// $player->displayDinoBasket();

?>">Nouvelle Partie</button>

<div class="infosplayer">
<p id="money" class="display_off_money">Argent : <?php $player->displayMoneyPlayer(); ?></p>
<p id="name" class="display_off_name">Nom : <?php $player->displayNamePlayer(); ?></p>
<p id="basket" class="display_off_basket">Listes Dinosaures : </p>
<p id="basketlist"><?php $player->displayDinoBasket() ?></p>
</div>
</header>
<main id="contenu" class="container">
<Div>
<h1>Jurassic Parc</h1>

</Div>
<div id="ui" class="display_off_card">
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Ankylosaurus') ?></p>
        <img src="images/Ankylosaurus.PNG" alt="Ankylosaurus">
        <button onclick="addElement('basketlist', createDino())">Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Ankylosaurus")?></span>
        <p>En plus de son imposante armure, la plupart des ankylosauriens, avaient de gros piquants, ainsi que des os au bout de la queue qu'ils pouvaient utiliser comme massue. Tous ces ??l??ments leur permettaient de se d??fendre contre les pr??dateurs.</p>
         <p><?php $player->displayDinoBasket() ?></p>
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Argentinosaurus') ?></p>
        <img src="images/Argentinosaurus.PNG" alt="Argentinosaurus">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Argentinosaurus")?></span>
        <p>Haut comme un b??timent de six ??tages et long comme trois autobus rang??s les uns derri??res les autres. Il utilise son long cou pour atteindre les conif??res, ou balayer le sol ?? la recherche des foug??res et des buissons.</p>   
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Brachiosaurus') ?></p>
        <img src="images/Brachiosaurus.PNG" alt="Brachiosaurus">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Brachiosaurus")?></span>
        <p>Peut atteindre 25 m??tres de long, et avoir un poids de 30 tonnes. Il a les pattes avant plus longues que les pattes arri??re. Gr??ce ?? leurs narines situ??es au sommet de leur t??te les brachiosaures peuvent se dissimuler dans l'eau ne laissant d??passer que ses orifices respiratoires.</p>  
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Maiasaura') ?></p>
        <img src="images/Maiasaura.PNG" alt="Maiasaura">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Maiasaura")?></span>
        <p>Maiasaura est un dinosaure surtout connu gr??ce ?? son attention remarquable envers ses petits. Il peut faire 9 m??tres de long, 3 m??tres de haut et avoir un poids de 2 ?? 3 tonnes. </p>    
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('stegosaurus') ?></p>
        <img src="images/stegosaurus.PNG" alt="Stegosaurus">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("stegosaurus")?></span>
        <p>La taille des st??gosaures variait entre 4,50 et 9 m??tres et on estime leur poids ?? 5 tonnes. Pour se prot??ger, il agite sa grande queue munie de quatre ??pines tr??s coupantes mesurant de 60 ?? 90 centim??tres de long. </p> 
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Triceratops') ?></p>
        <img src="images/Triceratops.PNG" alt="Triceratops">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Triceratops")?></span>
        <p>Il a le cr??ne le plus large de tous les dinosaures. cet animal a 3 cornes dont 2 qui faisaient parfois 1 m??tre de long. Il est aussi lourd qu'un camion. Il peut mesurer 9 m??tres de long.</p>
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Tyrannosaurus') ?></p>
        <img src="images/Tyrannosaurus.PNG" alt="Tyrannosaurus">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Tyrannosaurus")?></span>
        <p>Incontestablement le plus c??l??bre des dinosaures, mais aussi celui qui a la r??putation d???avoir ??t?? le plus f??roce d???entre eux. Il peut facilement atteindre 12 ?? 14 m??tres de long, 5 ?? 6 m??tres de hauteur pour un poids fleuretant avec les 7 tonnes.</p>
    </article>
    <article class="cards">
        <p class="statcombat"><?php $parc->displayCombatStat('Velociraptor') ?></p>
        <img src="images/Velociraptor.PNG" alt="Velociraptor">
        <button>Acheter</button><span class="prix">Prix : <?php $parc->displayDinosaursPrice("Velociraptor")?></span>
        <p>Il mesure environ deux m??tres de long et 70 cm de haut, et pese environ 15 kg. facilement reconnaissables ?? la longue griffe recourb??e r??tractile en forme de faucille qu'ils portaient au pied.</p>
    </article>
</div>
</main>
<?php

// $parc->displayDinosaurs();
// $parc->displayDinosaursInfos();

?>
</body>
</html>


