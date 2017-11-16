<html>
	<head>
		<meta charset='utf-8'>
		<link rel= "stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="./bootstrap/css/main.css"/>
		<link rel="stylesheet" href="./bootstrap/css/projet.css"/>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script type="application/javascript" src="./bootstrap/js/jquery-2.1.1.min.js"></script>
		<script type="application/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Table des scores</title>
		<style>
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!--________________________container menu______________________________-->
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menu" title="Accueil"><img src="images/boutonmenu.png" height="35px"><!--bouton reflexive--></button>
							<a class="navbar-brand" href="accueil.html"><img class="logohome" src="./images/logohome.png" title="Accueil" height="70px"></a>
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
			<div class="col-md-12 zone"><center>
				<h1 id="color">Table des scores:</h1></center>
			</div>
		</div>

				<table class="scores">

			<tr>
				<td class="infoscore">Place</td>
				<td class="infoscore">Pseudo</td>
				<td class="infoscore">Scores </td>
			</tr>

				<tr>
					<td class="premier">1er</td>
					<td class="premier"></td>
					<td class="premier"></td>
				</tr>

							<tr>
								<td class="deuxieme">2ème</td>
								<td class="deuxieme"></td>
								<td class="deuxieme"></td>      
							</tr>

								<tr>
									<td class="troisieme">3ème</td>
									<td class="troisieme"></td>
									<td class="troisieme"></td>       
								</tr>

									<tr>
										<td class="quatrieme">4ème</td>
										<td class="quatrieme"></td>
										<td class="quatrieme"></td>       
									</tr>

										<tr>
											<td class="cinquieme">5ème</td>
											<td class="cinquieme"></td>
											<td class="cinquieme"></td>       
										</tr>

									<tr>
										<td class="sixieme">6ème</td>
										<td class="sixieme"></td>
										<td class="sixieme"></td>       
									</tr>

								<tr>
									<td class="septieme">7ème</td>
									<td class="septieme"></td>
									<td class="septieme"></td>       
								</tr>

							<tr>
								<td class="huitieme">8ème</td>
								<td class="huitieme"></td>
								<td class="huitieme"></td>       
							</tr>

						<tr>
							<td class="neufieme">9ème</td>
							<td class="neufieme"></td>
							<td class="neufieme"></td>       
						</tr>

					<tr>
						<td class="dixieme">10ème</td>
						<td class="dixieme"></td>
						<td class="dixieme"></td>       
					</tr>
</table>
				


	</div>

			<script type="text/javascript">
        			$("#color").mouseover(function(){
                	$("#color").css({"color":"blue"});
                });

                	$("#color").mouseout(function(){
                	$("#color").css({"color":"black"});
            	});
        </script>	

		
</body>
</html>
