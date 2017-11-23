<html>
	<head>
		<head>
			<meta charset='utf-8'>
			<link rel= "stylesheet" type="text/css" href="index.css">
			<link rel="stylesheet" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" href="css/projet.css"/>
			<link rel="stylesheet" href="css/enigme2.css">
			<link rel="stylesheet" href="css/bouton.css">
			<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
			<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="js/enigme2.js"></script>
			<script type="application/javascript" src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Enigme 2</title>
		</head>
	</head>
	<body>

<!-- Petit menu qui suit la page -->
		<div class="row" id="menu">
				<div class="col-sm-12">
					<div>
						<button id="bouton" data-toggle="dropdown" class="btn dropdown-toggle">
						<span class="glyphicon glyphicon-align-justify"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#index.php"> Accueil </a></li><br>
							<li><a href="#"> Histoire </a></li><br>
							<li><a href="#"> Scores </a></li><br>
							<li id="deco"><a href="#"> Déconnexion </a></li>
						</ul>
					</div>
				</div>
		</div>

	<div class="container" id="ecran">
		<div class="row">
					<div class="col-md-6">
						<h3>Score : <span class="score"></span></h3>
					</div>
			<div class="col-md-6 zone">
				<center>
					<h1>Enigme 2</h1>
				</center>
			</div>
		</div>

	<div class="row">
		<div class="col-cs-12">
			<div id="limitation" class="d">

					<div class="drag p1" id="piece1">
					</div>
					<div class="drag p2">
					</div>
					<div class="drag p3">
					</div>
					<div class="drag p4">
					</div>
					<div class="foret decor p5">
					</div>
					<div class="arbredpl decor p5b">
					</div>
					<div class="montagne decor p6" id="mont">
					</div>

					<br>

					<div class="mag r1">
					</div>
					<div class="mag r2">
					</div>
					<div class="mag r3">
					</div>
					<div class="mag r4">
					</div>
			</div>
		</div>

	</div>
	</div>
					 <!-- Trigger the modal with a button -->
					 <button type="button" id="victoire" class="btn btn-info btn-lg gagne" data-toggle="modal" data-target="#myModal">Open Modal</button>

					 <!-- Modal -->
					 <div class="modal fade" id="myModal" role="dialog">
						 <div class="modal-dialog">

							 <!-- Modal content-->
							 <div class="modal-content">
								 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title" align="center">Bien joué enigme 2 terminée !!!</h4>
								 </div>
								 <div class="modal-body" align="center">
									 <p>Passons à la suivante !</p>
								 </div>
								 <div class="modal-footer">
									 <button class="btn btn-default" data-dismiss="modal" onclick="location.href='enigme3.html'" id="boutonmodal">Poursuivre</button>
								 </div>
							 </div>

						 </div>
					 </div>

<script type="text/javascript" src ="js/scoring.js"></script>
<script type="text/javascript">

$('.bravo').hide();
$('#victoire').hide();

var posd;
				var posr;
		$(function(){
				$('.drag').draggable({
						containment : '#limitation',
						snap : '.mag',
				});
		});
		$(function(){
				$('.decor').draggable({
						containment : '#limitation',
				});
		});

		$( ".drag" ).mouseup(function() {
				console.log('Position ok');
				p1 = $('.p1').position();
				r1 = $('.r1').position();
				console.log(p1.top,"piece1 top");
				console.log(r1.top,"receveur1 top");
				console.log(p1.left,"piece1 left");
				console.log(r1.left,"receveur1 left");
				p2 = $('.p2').position();
				r2 = $('.r2').position();
				console.log(p2.top,"piece2 top");
				console.log(r2.top,"receveur2 top");
				console.log(p2.left,"piece2 left");
				console.log(r2.left,"receveur2 left");
				p3 = $('.p3').position();
				r3 = $('.r3').position();
				console.log(p3.top,"piece3 top");
				console.log(r3.top,"receveur3 top");
				console.log(p3.left,"piece3 left");
				console.log(r3.left,"receveur3 left")
				p4 = $('.p4').position();
				r4 = $('.r4').position();
				console.log(p4.top,"piece4 top");
				console.log(r4.top,"receveur4 top");
				console.log(p4.left,"piece4 left");
				console.log(r4.left,"receveur4 left");

				if  (r1.top == p1.top && r1.left == p1.left && r2.top == p2.top && (r2.left+1) == p2.left && (r3.top+1) == p3.top
				&& r3.left == p3.left && (r4.top+1) == p4.top && (r4.left+1) == p4.left)  {
						$("#mont").attr('class', 'p6');
						console.log();
						console.log("bravo");
						$('.r1').hide();
						$('.r2').hide();
						$('.r3').hide();
						$('.r4').hide();
						$('.bravo').show();
						$('.gagne').click();
		};
	});

</script>

</body>
</html>
