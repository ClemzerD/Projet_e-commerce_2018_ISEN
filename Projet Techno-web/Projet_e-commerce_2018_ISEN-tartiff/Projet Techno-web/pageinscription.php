<?php include("include/head.php"); ?>

<body>
    <?php include("include/header.php"); ?>

	<section>

			<div class="text">
				<label for="Pseudo">Votre pseudo :</label>
				<input type="text" name="username" id="username" placeholder="Ex : Toto" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Password">Mot de passe :</label>
				<input type="password" name="password" id="password" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="Password">Confirmation :</label>
				<input type="password" name="confirmation" id="onfirmation" size="30" maxlength="20"/>
			</div>

			<div class="text">
				<label for="E-mail">E-mail :</label>
				<input type="e-mail" name="email" id="email" placeholder="Ex : dupont.dupond@blabla.fr"
				size="30" maxlength="30" />
			</div>

			<div class="text">
				<a href="connexionreussi.php"><input type="submit" value="Inscription"></a>
			</div>

	</section>
		
	<?php include("include/footer.php"); ?>
</body>