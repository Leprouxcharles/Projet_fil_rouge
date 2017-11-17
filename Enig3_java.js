var Himg = $("#cacherep")[0].height;
var Wimg = $("#cacherep")[0].width;
var reponse = "Cliquer";

console.log(Himg, Wimg)

// Fonction permettant l'agrandissement de l'image
function moins(event){
  Himg = Himg -20;
  Wimg = Wimg -20;

  $('#cacherep').css({'width' : Wimg+'px'});
  $('#cacherep').css({'height' : Himg+'px'});

  if(Himg == 0 || Wimg == 0){
    $("#rep").show();
  }
  else{
    $("#rep").hide();
  }
  console.log(Himg);
};

// Fonction permettant la diminution de l'image
function plus(event){

  Himg = Himg +20;
  Wimg = Wimg +20;

  $('#cacherep').css({'width' : Wimg+'px'});
  $('#cacherep').css({'height' : Himg+'px'});
  console.log(Himg);

  if(Himg != 0 || Wimg != 0){
    $("#rep").hide();
  }
  else{
    $("#rep").show();
  }
}

// Fonction permettant d'entrer une réponse et vérifiant la réponse
function gagne(event){
  var util = $("input").val();

  console.log(util + "est la reponse");
    if(util == reponse){
      alert("VICTORY !!!!!!! PRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR!!!!!!!!!!!!!!!!!!")
      console.log("Bravo vous avez gagné !!!");
    }
    else{
      alert("Nope !!!!!! Encore une fois ?")
    }
  }
