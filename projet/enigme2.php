<html>
	<head>
		<head>
			<meta charset='utf-8'>
			<link rel= "stylesheet" type="text/css" href="index.css">
			<link rel="stylesheet" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" href="css/projet.css"/>
			<link rel="stylesheet" href="css/enigme2.css">
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
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!--________________________container menu______________________________-->
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menu" title="Accueil"><img src="images/boutonmenu.png" height="35px"><!--bouton reflexive--></button>
							<a class="navbar-brand" href="accueil.html"><img class="logohome" src="images/logohome1.png" title="Accueil" height="70px"></a>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<ul class="nav navbar-nav">
								<a href="enigme1.html" title="enigme1">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 1</li></button>
								</a>
								<a href="enigme2.html" title="enigme2">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 2</li></button>
								</a>
								<a href="enigme3.html" title="enigme3">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 3</li></button>
								</a>
								<a href="scores.html" title="scores">
									<button  type="button" class="btn btn-primary btn-lg"><li>Table des scores </li></button>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>

	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12 zone">
				<center>
					<h1>Enigme 2</h1>
				</center>
			</div>
		</div>
	<div class="row">
		<div class="col-cs-12">
			<div id="limitation" class="d">

					<div class="drag p1">
							<p></p>
					</div>
					<div class="drag p2">
							<p></p>
					</div>
					<div class="drag p3">
							<p></p>
					</div>
					<div class="drag p4">
							<p></p>
					</div>
					<div class="foret decor p5">
					</div>
					<div class="arbredpl decor p5b">
					</div>
					<div class="montagne decor p6" id="mont">
					</div>


					<p class="bravo">BRAVO</p>

					<br>

					<div class="mag r1">
							<p></p>
					</div>
					<div class="mag r2">
							<p></p>
					</div>
					<div class="mag r3">
							<p></p>
					</div>
					<div class="mag r4">
							<p></p>
					</div>
			</div>
		</div>

	</div>
	</div>

	<div class="container">

					 <!-- Trigger the modal with a button -->
					 <button type="button" id="victoire" class="btn btn-info btn-lg gagne" data-toggle="modal" data-target="#myModal">Open Modal</button>

					 <!-- Modal -->
					 <div class="modal fade" id="myModal" role="dialog">
						 <div class="modal-dialog">

							 <!-- Modal content-->
							 <div class="modal-content">
								 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Modal Header</h4>
								 </div>
								 <div class="modal-body">
									 <p>Some text in the modal.</p>
								 </div>
								 <div class="modal-footer">
									 <button class="btn btn-default" data-dismiss="modal" onclick="location.href='enigme3.html'">Poursuivre</button>
								 </div>
							 </div>

						 </div>
					 </div>

			 </div>

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
				console.log('yes');
				p1 = $('.p1').position();
				r1 = $('.r1').position();
				p2 = $('.p2').position();
				r2 = $('.r2').position();
				p3 = $('.p3').position();
				r3 = $('.r3').position();
				p4 = $('.p4').position();
				r4 = $('.r4').position();
				console.log(p1.top);
				console.log(r1.top);
				if  ((r1.top == p1.top) && (r1.left == p1.left) && (r2.top == p2.top) && (r2.left == p2.left)
				&& (r3.top == p3.top) && (r3.left == p3.left) && (r4.top == p4.top) && (r4.left == p4.left)){
						$("#mont").attr('class', 'p6');
						console.log("CA MARCHE OU PAS ?????!!!!!!!!");
						$('.r1').hide();
						$('.r2').hide();
						$('.r3').hide();
						$('.r4').hide();
						$('.bravo').show();
						$('#victoire').click();

				};
		});

</script>

</body>
</html>
