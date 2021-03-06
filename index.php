<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Validateur norme w3c </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./assets/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"> </script> 
		<script src='api.js' async></script>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fas fa-home"></i>Accueil</a></li>
						<li class="nav-item active"><a class="nav-link" href="inscription.php"><i class="fas fa-user-plus"></i>Inscription</a></li>
						<li class="nav-item active"><a class="nav-link" href="connexion.php"><i class="fas fa-user-check"></i>Connexion</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="container">
			<h1>Page d'accueil</h1>
			<form action="./process.php" method="GET">
			<div class="form-group">
				<label for="url" name="url">URL</label> 
				<input type="text" class="form-control" name="url" id="url" placeholder="Entrez l'url de votre site">
			</div>
			<div class="text-center">
				<button type="submit"  class="btn btn-outline-info" id="btn_submit_url">OK</button>
			</div>
			</form>
		
			<footer class="bg-light text-center text-lg-start fixed-bottom">
			<div class="text-center p-3 d-flex justify-content-center">
				<!--<div><figure><img src="./assets/logo_ucp.png" alt="logo ucp" class="img-thumbnail"/></figure></div>-->
				<div>DUFERNEZ Margot & BACHE Nour &copy; CY Cergy-Paris Universit?? - UFR Sciences et Techniques</div>
			</div>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

