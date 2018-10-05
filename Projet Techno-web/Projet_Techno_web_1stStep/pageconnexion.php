<html>
<head>
	<meta charset="utf-8">
	<title>Rituel.com</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php include("include/header.php"); ?>

	<section>
		<div class="text">
				<label for="Pseudo">Pseudo :</label>
				<input type="text" name="Pseudo" id="Pseudo" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Password">Mot de passe :</label>
				<input type="password" name="Password" id="Password" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<p>Première connexion ?
				<a href="pageinscription">S'inscrire</a></p>
			</div>

	</section>
		
	<?php include("include/footer.php"); ?>
</body>
