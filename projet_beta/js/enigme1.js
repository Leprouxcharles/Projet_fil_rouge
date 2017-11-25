$("#color").mouseover(function(){
    $("#color").css({"color":"#8B0000"});
  });
$("#color").mouseout(function(){
  $("#color").css({"color":"black"});
});

var persotop;
var persoleft;
var personnage = $(".perso");
var texte = false;
var ouverture = false;
var interrupt1 = $('.interrupt1')
/*Selection des éléments obstacles.*/
var buissonObs = $('.buisson');
var arbreObs = $('.arbre');
var zoneTop = $('.zone')[0].offsetTop;
var zoneLeft = $('.zone')[0].offsetLeft;
/*Comptage des points pour le score finale. A déplacer dans le fichier JS générale.
pour le moment -1 par click*/

/*position du buisson cachant l'interrupteur permettant d'ouvrir le passage*/
// var buissondeplTop = $('.deplacable')[0].offsetTop;
// var buissondeplLeft = $('.deplacable')[0].offsetLeft;
$( function() {
  $(".deplacable").draggable({
    drag: function(){
      var offset = $(this).offset();
      xPos = offset.left;
      yPos = offset.top;
    }
  });
});
var xPos;
var yPos;
console.log(yPos, xPos);

function movePerso(event){
    if (event.key=='z'||event.key=='Z' || event.key=='ArrowUp'){
      $(".perso").animate({'top' : '-=10px'}, 5);
      personnage.css({'background-image' : 'url("img/spritedos.png")'});
      if( personnage[0].offsetTop < 15){
        $(".perso").animate({'top' : '+=10px'},5);
        personnage.css({'background-image' : 'url("img/spritedos_bloque.png")'});
      }
      /*Gestion des collisions avec les obstacles.
      Récupération pour les mouvenements allant vers le haut*/
      if(personnage[0].offsetTop <= 280 && personnage[0].offsetLeft >= arbreObs[0].offsetLeft) {
        $(".perso").animate({'top' : '+=10px'},5);
        personnage.css({'background-image' : 'url("img/spritedos_bloque.png")'});
      }
      if(personnage[0].offsetTop >= 280 && personnage[0].offsetLeft <= arbreObs[0].offsetLeft) {
        $(".perso").animate({'top' : '-=20px'},5);
      }
      if(personnage[0].offsetTop >= 360 && personnage[0].offsetLeft <= 570) {
        $(".perso").animate({'top' : '+=10px'},5);
        personnage.css({'background-image' : 'url("img/spritedos_bloque.png")'});
      }
    }
    if (event.key=='s'||event.key=='S' || event.key=='ArrowDown'){
      $(".perso").animate({'top' : '+=10px'}, 5)
      personnage.css({'background-image' : 'url("img/spriteface.png")'});
      if ( personnage[0].offsetTop > 440){
        $(".perso").animate({'top' : '-=10px'}, 5);
        personnage.css({'background-image' : 'url("img/spriteface_bloque.png")'});
      }
      if (xPos == 739 && xPos == 119) {
        if (personnage[0].offsetTop >= 340 && personnage[0].offsetLeft <= 80) {
          $(".perso").animate({'top' : '-=10px'}, 5);
          personnage.css({'background-image' : 'url("img/spriteface_bloque.png")'});
        }
      }
    }
    if (event.key=='q'||event.key=='Q' || event.key=='ArrowLeft'){
      $(".perso").animate({'left' : '-=10px'}, 5)
      personnage.css({'background-image' : 'url("img/spritegauche.png")'});
      if ( personnage[0].offsetLeft < 0 ){
        $(".perso").animate({'left' : '+=10px'}, 5);
        personnage.css({'background-image' : 'url("img/spritegauche_bloque.png")'});
      }
      if (personnage[0].offsetLeft >=580 && personnage[0].offsetTop <= 350) {
        $(".perso").animate({'left' : '+=10px'}, 5)
        personnage.css({'background-image' : 'url("img/spritegauche_bloque.png")'});
      }
      if ( xPos == 119 && xPos == 739 ) {
        if (personnage[0].offsetLeft <= 80 && personnage[0].offsetTop >= 360) {
          $(".perso").animate({'left' : '+=10px'}, 5);
          personnage.css({'background-image' : 'url("img/spritegauche_bloque.png")'});
        }
      }
    }
    if (event.key=='d'||event.key=='D'|| event.key=='ArrowRight'){
      $(".perso").animate({'left' : '+=10px'}, 5)
      personnage.css({'background-image' : 'url("img/spritedroit.png")'});
      if ( personnage[0].offsetLeft  > 1060){
        $(".perso").animate({'left' : '-=10px'}, 5);
        personnage.css({'background-image' : 'url("img/spritedroit_bloque.png")'});
      }
      /*Gestion des collisions avec le premier arbre.
      Récupération délimitation de l'arbre pour les mouvenements allant vers la droite*/
      if (personnage[0].offsetLeft >= arbreObs[0].offsetLeft && personnage[0].offsetTop <= 260) {
        $(".perso").animate({'left' : '-=10px'}, 5)
        personnage.css({'background-image' : 'url("img/spritedroit_bloque.png")'});
      }
      /*Gestion des collisions avec le premier buisson.
      Récupération délimitation du buisson pour les mouvenements allant vers la droite*/
      if (personnage[0].offsetLeft >= buissonObs[0].offsetLeft && personnage[0].offsetTop <= 350) {
        $(".perso").animate({'left' : '-=10px'}, 5)
        personnage.css({'background-image' : 'url("img/spritedroit_bloque.png")'});
      }
      if (ouverture===false) {
        if (personnage[0].offsetLeft >= 650 && personnage[0].offsetTop <= 450) {
          $(".perso").animate({'left' : '-=10px'}, 5)
          personnage.css({'background-image' : 'url("img/spritedroit_bloque.png")'});
        }
      }
    }
}
function interrupteur(event){
if (personnage[0].offsetTop <= 440 && personnage[0].offsetLeft >= 820){
  texte = true;
  $(".pancarte").css({"display" : "block"});
}
}
function choisiPerso(event) {
  $('.perso').css({ 'top': '10px', 'left': '10px' });
}
function dansetexte(event) {
  var bonjourtop = parseInt(Math.random() * (420));
  var bonjourleft = parseInt(Math.random() * (750 - 10) + 10);
  if (texte === true){
    $('.azerty').offset({'top' :  239 ,'left': 341});
  }
  else {
    $("textarea").val('');
    $('.azerty').offset({ 'top': bonjourtop, 'left': bonjourleft });
  }
}
function dansetexte1(event) {
  var bonjourtop = parseInt(Math.random() * (420));
  var bonjourleft = parseInt(Math.random() * (750 - 10) + 10);
  if (texte === true){
    $('.azerty').offset({'top' :  239 ,'left': 341});
  }
  else {
    $("textarea").val('');
    $('.azerty').offset({ 'top': bonjourtop, 'left': bonjourleft });
  }
}
function ouverturePassage(event) {
  if (personnage[0].offsetTop >= 400 && personnage[0].offsetLeft <= 40){
    $(".sortie").css({"display" : "none"});
    ouverture = true;
  }
}
/*fonction qui permet de finir l'énigme 1:
  SI on rentre le mot arbre dans le nuage alors on peux passer à la suite*/
  function victoireEnigme(event) {
    if (event.key = 'enter' && $('.azerty')[0].value == 'ARBRE') {
      $('.score').text(score)
      $('.zone').append('<div class="modal-content">'+
                '<div class="modal-header">'+
                  '<h4 class="modal-title">VICTOIRE !</h4>'+
                '</div>'+
                '<div class="modal-body">'+
                '<span>Votre score est :></span> points !</span>'+
                  '<form action="php/updateEnigme2.php" method="post">' +
                    '<input type="text" value="" name="scoreEnigme1" class="scoreInput">'+
                    '<br/>'+
                    '<button class="btn btn-default" type="submit" id="boutonmodal">Poursuivre</button>' +
                  '</form>' +
                '</div>'+
                '<div class="modal-footer">'+
                '</div>'+
          '</div>')
    }
  }
