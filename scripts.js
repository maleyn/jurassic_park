function DisplayUi() {

    let btn_Nouvelle_Partie = document.querySelector('#newgame');
    let Display_New_Game = document.querySelector('.display_off_card');
    let Display_player_money = document.querySelector('.display_off_money');
    let Display_player_name = document.querySelector('.display_off_name');

    Display_New_Game.classList.add("display_on");
    Display_New_Game.classList.remove("display_off_card");
    Display_player_money.classList.add("display_on");
    Display_player_money.classList.remove("display_off_money");
    Display_player_name.classList.add("display_on");
    Display_player_name.classList.remove("display_off_name");
}

// function addElement() {

//     let newdino = document.createElement("div");
//     let varr = "<?php $player->displayDinoBasket();?>";
//     let namedino = document.createTextNode(varr);

//     newdino.appendChild(namedino);
//     let getdiv = document.getElementById("infosplayer");
//     document.body.insertBefore(newdino, getdiv);

// }

function createDino() {

    var result ="<?php $player->createDino(new Ankylosaurus('Henry'));?>"
    return result;
}

function addElement(id, dino) {

    var result = dino;
    var container = document.getElementById(id);
    container.innerHTML = container.innerHTML + (result);
}