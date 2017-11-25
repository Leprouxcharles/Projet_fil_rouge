var Himg = $("#feu")[0].height;
var Wimg1 = $("#feu")[0].width;
var prop = Himg/Wimg1;
var Wimg = Wimg1*prop;
var reponse = "un marron";
var top1 = $("#feu")[0].offsetTop;
var left1= $("#feu")[0].offsetLeft;
// SERT A RIEN !!
// var feu=0;

// Permet de cacher la zone de texte le bouton et la question
	$("#reponse").hide();
	$("#valid").hide();
	$("#quizz").hide();

// Fonction permettant la diminution de l'image
function moins(event){
  Himg = Himg -5;
  Wimg = Wimg -5;
  top1 = top1 +5;
  left1 = left1 +2.5;

  $('#feu').css({'width' : Wimg+'px'});
  $('#feu').css({'top' : top1+'px'});
  $('#feu').css({'height' : Himg+'px'});
  $('#feu').css({'left' : left1+'px'});
 console.log(Himg, Wimg)

// Si la taille de l'image atteind 0 affiche la question le bouton et la zone de texte
  if(Himg == 0 || Wimg == 0){
    $("#reponse").show(500);
		$("#valid").show(500);
		$("#quizz").show(500);
  }
	// A supprimer sert à rien
	// else{
  //   $("#reponse").hide(500);
	// 	$("#valid").hide(500);
  // }
};

// Fonction permettant l'agrandissement de l'image
function plus(event){

  Himg = Himg +5;
  Wimg = Wimg +5;
  top1 = top1 -5;
  left1 = left1 -2.5;

console.log(Himg, Wimg)
  $('#feu').css({'width' : Wimg+'px'});
  $('#feu').css({'top' : top1+'px'});
  $('#feu').css({'height' : Himg+'px'});
  $('#feu').css({'left' : left1+'px'});

	if (Himg >= 300 || Wimg >= 300){
	alert("Arrête ça, tu vas tout brûler !!");
	feu++;
	}

// A supprimer sert à rien
	// if (feu>=1){
	// 	$("#quizz").show(500);
	// }
  if(Himg != 0 || Wimg != 0){
    $("#reponse").hide(500);
		$("#valid").hide(500);
		$("#quizz").hide(500);
  }

	// A supprimer sert à rien
	// else{
  //   $("#reponse").show(500);
	// 	$("#valid").show(500);
  // }
};

// Fonction permettant d'entrer une réponse et vérifiant la réponse
function gagne(event){
  var util = $("input").val();

  console.log(util + "est la reponse");
    if(util == reponse){
	$('.score3').text(score)
	$('#limitation').append('<div id="victoere" class="modal-content">'+
                          '<div class="modal-header" >'+
                          '<h4 class="modal-title"><font color="black">VICTOIRE !</h4>'+
                          '</div>'+
													'<div class="modal-body">'+
					                '<span>Votre score est :>'+
					                  '<form action="php/updateEnigme4.php" method="post">' +
					                    '<input type="text" value="" disabled name="scoreEnigme3" class="scoreInput3">'+
					                    '<button class="btn btn-default" type="submit" id="boutonmodal">Inscrire Score</button>' +
					                  '</form>' +
					                '</div>'+
                          '<div class="modal-footer">'+
                        	// '<button class="btn btn-default">Enregistrer score</button></a>'+
                          '</div>'+
                        	'</div>')
    }
    else{
      alert("Raté... Essaie encore !")
    }
  }
