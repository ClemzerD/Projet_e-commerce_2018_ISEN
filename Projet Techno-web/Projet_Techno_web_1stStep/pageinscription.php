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
				<label for="Pseudo">Votre pseudo :</label>
				<input type="text" name="Pseudo" id="Pseudo" placeholder="Ex : Toto" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Password">Mot de passe :</label>
				<input type="password" name="Password" id="Password" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Password">Confirmation :</label>
				<input type="password" name="Password" id="Password" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Pseudo">Nom:</label> 
				<input type="text" name="Nom" id="Nom" placeholder="Ex : Dupont" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Pseudo">Prénom :</label> 
				<input type="text" name="Prénom" id="Prénom" placeholder="Ex : Toto" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="E-mail">E-mail :</label>
				<input type="e-mail" name="E-mail" id="E-mail" placeholder="Ex : dupont.dupond@blabla.fr"
				size="30" maxlength="30" />
			</div>

			<div class="text">
				<label for="Telephone">Téléphone :</label>
				<input type="Telephone" name="Telephone" id="Telephone" placeholder="Ex : 0601234567"
				size="30" maxlength="30" />
			</div>

	</section>
		
	<?php include("include/footer.php"); ?>
</body>
