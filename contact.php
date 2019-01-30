<?php include('header.inc.php'); ?>

<section class="container">
	<div class="row" style="margin-bottom: 30px;">
		<div class="col-xs-offset-3">
			<p><strong>CONTACT FESTIVAL</strong></p>
			<p>
				Les Films en Plein Air<br>
				1 Place Colette<br> 
				75001 Paris
			</p>
			<p>
				Téléphone :0 825 10 16 80<br>
				Email : jennifer-viala@gmail.com
			</p>
		</div>
	</div>
	<div class="row">
		<form action="" class="form-horizontal col-xs-offset-3 col-xs-6" id="contact">
			<div class="form-group">
			  	<div class="legend">
			  		<strong>FORMULAIRE DE CONTACT :</strong><br>
			  		<span style="font-size:10px;">champs requis <strong>*</strong></span>
			  	</div>
			</div>
			<div class="form-group">
			  	<label for="nom">Nom<strong>*</strong> :</label>
			  	<input type="text" class="form-control" id="nom" placeholder="Nom" required>
			</div>
			<div class="form-group">
				<label for="prenom">Prénom<strong>*</strong> :</label>
				<input type="text" class="form-control" id="prenom" placeholder="Prénom" required>
			</div>
			<div class="form-group">
				<label for="email">Email<strong>*</strong> :</label>
				<input type="email" class="form-control" id="email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label for="message">Votre message<strong>*</strong> :</label>
				<textarea class="form-control resizable" rows="5" id="message" placeholder="Votre message" required></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="pull-right btn btn-warning">Envoyer</button>
			</div>
		</form>
	</div>
</section>

<?php include('footer.inc.php'); ?>