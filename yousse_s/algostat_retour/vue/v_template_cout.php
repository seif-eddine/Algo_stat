<!DOCTYPE html>
<html>
	<head>
		<!--<link rel="stylesheet" href="css/style.css" />-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>ALGOSTAT LE RETOUR</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div id="page">
			<div>
				<center><h2>ALGOSTAT LE RETOUR</h2></center>
				<!--<center><h2>Bienvenue sur notre application web<h2></center>
				<center><h6></br>Celle-ci consiste à trier des tableaux de chiffres</br>Les trois tris disponibles sont :</br>
					Trie à Bulle - Trie à Selection - Trie à insertion
				</h6></center>-->
			</div>

			<div class="row">
				<div class="col-md-3" id="formulaire">
					<form method="POST" action="index.php?uc=cout&action=<?php echo $action?>">
						<h5>Les séries</h5>
						<!--<div class="radio">
							<label>
								<input type="radio" name="optradio" value="triee" <?php if ($_SESSION['serie'] == "triee") { ?> checked <?php } $action = "triee";?>>
								<img src="image/triee2.svg" alt="some_text">
							</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" value="inverse" <?php if ($_SESSION['serie'] == "inverse") { ?> checked <?php } ?>>
							<img src="image/inverse2.svg" alt="some_text"></label>
						</div>
						<div class="radio disabled">
							<label><input type="radio" name="optradio" value="random" <?php if ($_SESSION['serie'] == "random") { ?> checked <?php } ?>>
							<img src="image/random3.svg" alt="some_text"></label>
						</div>
						<div class="radio disabled">
							<label><input type="radio" name="optradio" value="quasi" <?php if ($_SESSION['serie'] == "quasi") { ?> checked <?php } ?>>
							<img src="image/quasi.svg" alt="some_text"></label>
						</div>
						<div class="radio disabled">
							<label><input type="radio" name="optradio" value="double" <?php if ($_SESSION['serie'] == "double") { ?> checked <?php } ?>>
							<img src="image/doublon2.svg" alt="some_text"></label>
						</div>
						<div class="radio disabled">
							<label><input type="radio" name="optradio" value="moy" <?php if ($_SESSION['serie'] == "moy") { ?> checked <?php } ?>>
							<img src="image/average3.svg" alt="some_text"></label>
						</div><br>-->
						<div class="radio">
							<label>
								<input type="radio" name="optradio" value="triee">
								<?php if ($_SESSION['serie'] == "triee") { ?> <img src="image/triee_checked.svg" alt="some_text"> <?php } else  { ?> <img src="image/triee.svg" alt="some_text"> <?php }?>
								<!--<img src="image/triee.svg" alt="some_text">-->
							</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" value="inverse">
							<?php if ($_SESSION['serie'] == "inverse") { ?> <img src="image/inverse_checked.svg" alt="some_text"> <?php } else  { ?> <img src="image/inverse.svg" alt="some_text"> <?php }?>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" value="random">
							<?php if ($_SESSION['serie'] == "random") { ?> <img src="image/random_checked.svg" alt="some_text"> <?php } else  { ?> <img src="image/random.svg" alt="some_text"> <?php }?>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" value="quasi">
							<?php if ($_SESSION['serie'] == "quasi") { ?> <img src="image/quasi_checked.svg" alt="some_text"> <?php } else  { ?> <img src="image/quasi.svg" alt="some_text"> <?php }?>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" value="double">
							<?php if ($_SESSION['serie'] == "double") { ?> <img src="image/doublon_checked.svg" alt="some_text"> <?php } else  { ?> <img src="image/doublon.svg" alt="some_text"> <?php }?>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" value="moy">
							<?php if ($_SESSION['serie'] == "moy") { ?> <img src="image/average_checked.svg" alt="some_text"> <?php } else  { ?> <img src="image/average.svg" alt="some_text"> <?php }?>
						</div><br>

						<!-- 243 96 3-->
						<h5><label for="nb">Le nombre:</label></h5>
						<select class="form-control" id="nb" name="nb">
							<option <?php if ($_SESSION['nb'] == 10) { ?> selected <?php } ?>>10</option>
							<option <?php if ($_SESSION['nb'] == 100) { ?> selected <?php } ?>>100</option>
							<option <?php if ($_SESSION['nb'] == 1000) { ?> selected <?php } ?>>1000</option>
							<option <?php if ($_SESSION['nb'] == 10000) { ?> selected <?php } ?>>10000</option>
						</select>
						<br><br>
						<button class="btn btn-default" type="submit">Button</button>
					</form>
				</div>
				<div class="col-md-9" id="affichage">				
						<?php echo $content; ?>					
				</div>
			</div>
		</div>
		<!--<script src="Chart.js"></script>-->
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/my_js.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	</body>
</html>