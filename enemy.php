<?php include('header.inc.php'); ?>

	<section class="container">		
		<div class="row">
			<div class="col-xs-3 col-xs-offset-1 col-bottom">
			  <div class="thumbnail only-img">
			    <img src="images/enemy-2.jpg" alt="ENEMY">
			  </div>
			</div>
			<div class="col-xs-6 col-bottom">
				<p>Date de sortie : 27 août 2014<br> 
				Durée : 1h30<br>
				Genre : Thriller<br>
				Réalisé par Denis Villeneuve<br>
				Avec Jake Gyllenhaal, Mélanie Laurent, Sarah Gadon</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<p class="text-justify"><strong>SYNOPSIS ET DÉTAILS</strong><br>
				Adam, un professeur discret, mène une vie paisible avec sa fiancée Mary. Un jour qu'il découvre son sosie parfait en la personne d’Anthony, un acteur fantasque, il ressent un trouble profond. Il commence alors à observer à distance la vie de cet homme et de sa mystérieuse femme enceinte. Puis Adam se met à imaginer les plus stupéfiants scénarios... pour lui et pour son propre couple.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<p><strong>DÉTAILS SUR LA PROJECTION</strong><br>
				Date : 5 août<br>
				Horaire : 18h</p>
			</div>
		</div>
	</section>

	<div id="background-fluid">	
		<div class="container">
			<div class="row">
				<form action="" class="form-horizontal col-xs-offset-1 col-xs-10">
					<div class="col-xs-12">
						<div class="form-group">
						  	<div class="legend">
						  		<strong>INSCRIPTION :</strong><br>
						  		<span style="font-size:10px;">champs requis <strong>*</strong></span>
						  	</div>
						</div>
					</div>
					<div class="col-xs-6">
					  	<div class="form-group">
						    <label for="nom" class="col-xs-3 control-label">Nom<strong>*</strong> :</label>
						    <div class="col-xs-8">
						    	<input type="text" class="form-control" id="nom" placeholder="Nom" required>
						    </div>
					  	</div>				  
					  	<div class="form-group">
						    <label for="prenom" class="col-xs-3 control-label">Prénom<strong>*</strong> :</label>
						    <div class="col-xs-8">
						    	<input type="text" class="form-control" id="prenom" placeholder="Prénom" required>
						    </div>
					  	</div>
					  	<div class="form-group">
						    <label for="email" class="col-xs-3 control-label">Email<strong>*</strong> :</label>
						    <div class="col-xs-8">
						    	<input type="email" class="form-control" id="email" placeholder="Email" required>
						   	</div>
					  	</div>
					</div> 
					<div class="col-xs-6">
						<div class="form-group">
						  	<div class="col-xs-8 pull-right">
						  		<label>Films projetés<strong>*</strong> :</label>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Enemy</label>
							  	</div>							  	
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Vol au-dessus d'un nid de coucou</label>
							  	</div>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Holy motors</label>
							  	</div>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Requiem for a dream</label>
							  	</div>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Into the wild</label>
							  	</div>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Demolition</label>
							  	</div>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">The master</label>
							  	</div>
							  	<div class="checkbox">
							  	  <label><input type="checkbox" value="">Le cercle des poètes disparus</label>
							  	</div>
						  	</div>
						</div>  
					</div>
				  	<div class="form-group text-center">
				  	  	<button class="btn btn-warning">Envoyer</button>
				  	</div>
				</form>
			</div>
		</div>
	</div>

<?php include('footer.inc.php'); ?>