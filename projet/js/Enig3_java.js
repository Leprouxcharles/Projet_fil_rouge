var Himg = $("#feu")[0].height;
var Wimg1 = $("#feu")[0].width;
var prop = Himg/Wimg1;
var Wimg = Wimg1*prop;
var reponse = "un marron";
var top1 = $("#feu")[0].offsetTop;
var left1= $("#feu")[0].offsetLeft;
var feu=0;

console.log(Himg, Wimg)

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
  
  if(Himg == 0 || Wimg == 0){
    $("#reponse").show(500);
	$("#valid").show(500);
  }else{
    $("#reponse").hide(500);
	$("#valid").hide(500);
  }
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
	
	if (feu>=1){
		$("#quizz").show(500);
	}
  if(Himg != 0 || Wimg != 0){
    $("#reponse").hide();
	$("#valid").hide();
  }else{
    $("#reponse").show(500);
	$("#valid").show(500);
  }
};

// Fonction permettant d'entrer une réponse et vérifiant la réponse
function gagne(event){
  var util = $("input").val();

  console.log(util + "est la reponse");
    if(util == reponse){
	  $('#limitation').append('<div id="victoere" class="modal-content">'+
                                    '<div class="modal-header" >'+
                                        '<h4 class="modal-title"><font color="black">VICTOIRE !</h4>'+
                                    '</div>'+
                                    '<div class="modal-body">'+
                                        '<p>Tu as <span class="score3"></span> points !</p>'+
                                    '</div>'+
                                    '<div class="modal-footer">'+
                                    '  <button class="btn btn-default">Enregistrer score</button>'+
                                    '</div>'+
                        '</div>')
    }
    else{
      alert("Raté... Essaie encore !")
    }
  }
