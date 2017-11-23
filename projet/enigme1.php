<html>
	<head>
		<meta charset='utf-8'>
		<link rel= "stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/projet.css"/>
		<link rel="stylesheet" href="css/enigme1css.css" />
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="application/javascript" src="js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Enigme 1</title>

	</head>
	<body onclick="scorIng(event)">
		

	<!--________________________page______________________________-->


	<div class="container back">
		<div class="row">
			<div class="col-md-12 jeu">
				<center>
					<h1 id="color">Enigme 1</h1>
				</center>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3>Score : <span class="score"></span></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 zone">
				<textarea  onclick="dansetexte(event)" onkeypress="dansetexte1(event); victoireEnigme(event)"  id="nuage" class="azerty"></textarea>
				<button class="perso" onclick="choisiPerso(event)" onkeypress="movePerso(event)" onkeyup="ouverturePassage(event); interrupteur(event)"></button>
				<img src="img/buisson_obs.png" class="buisson"/>
				<img src="img/Arbre2.png" class="arbre"/>
				<img src="img/arbre_depl.png" class="sortie"/>
				<img src="img/interruptUp.png" class="interrupt1"/>
				<img src="img/interruptgg.png" class="interruptgg"/>
				<img src="img/arbre_depl.png" class="deplacable"/>
				<img src="img/pancarte.png" class="pancarte">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
  $("#color").mouseover(function(){
    	$("#color").css({"color":"#8B0000"});
    });

  $("#color").mouseout(function(){
  	$("#color").css({"color":"black"});
	});

</script>
<script>
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
	var score = 100;
	$('.score').text(score)

	function scorIng(event) {
		score--;
		$('.score').text(score)
	}
	/*position du buisson cachant l'interrupteur permettant d'ouvrir le passage*/
	// var buissondeplTop = $('.deplacable')[0].offsetTop;
	// var buissondeplLeft = $('.deplacable')[0].offsetLeft;
	var xPos;
	var yPos;
	$( function() {
		$(".deplacable").draggable({
			drag: function(){
				var offset = $(this).offset();
				xPos = offset.left;
				yPos = offset.top;
			}
		});
	});

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
			if (event.key = 'enter' && $('.azerty')[0].value == 'arbre') {
				$('.score').text(score)
				$('.zone').append('<div class="modal-content">'+
									'<div class="modal-header">'+
										'<h4 class="modal-title">VICTOIRE !</h4>'+
									'</div>'+
									'<div class="modal-body">'+
										'<p>Tu as <span class="score"></span> points !</p>'+
									'</div>'+
									'<div class="modal-footer">'+
									'  <button class="btn btn-default">Poursuivre</button>'+
									'</div>'+
						'</div>')
			}
		}
</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
