<html>
	<head>
		<head>
			<meta charset='utf-8'>
			<link rel= "stylesheet" type="text/css" href="index.css">
			<link rel="stylesheet" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" href="css/projet.css"/>
			<link rel="stylesheet" href="css/enigme3.css">
			<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
			<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
			<script type="application/javascript" src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Enigme 3</title>
		</head>
	</head>
	<body onclick="scorIng(event)">

<!--________________________container menu______________________________-->

	<div class="container">
		<div class="row">
		
			<div class="col-md-12 zone">
				<center>
					<h1>Enigme 3</h1>
				</center>
			</div>
			<div class="row" class="enigne1row">
			<div class="col-md-12" class"enigne1row">
				Score : <span class="score3"></span>
			</div>
		</div>
			<div id="limitation" class="d">
					
					<img id="feu" src="img/Fayeur.png"  class="img-responsive">
					
					<div id="moins" onclick="moins()" class="seau"></div>
					
					<div id="plus" onclick="plus()"  class="souffleur"></div>
				
				<input id="reponse"type="text" placeholder="Réponse...?"/>
				<button id="valid" type="button" onclick="gagne()">Valider</button>
				
				<div id="quizz">Je suis<br/>petit et <br/>marron...</div>
			</div>
		</div>

	</div>

</body>
<script type="text/javascript">
$("#reponse").hide();
$("#valid").hide();
$("#quizz").hide();
$("#enigme").show(500);

$("#cacher").click (function(){
$("#enigme").fadeToggle(2000);
});
</script>
<script type="text/javascript" src="js/Enig3_java.js"></script>

</html>
