
<section id="about_content">

	<section>
		<h2>Version de l'application :</h2>
		<p>
			La version actuelle de l'application est <span style="font-weight: bold;color: black;">1.0F</span>
		</p>
		
	</section>

	<section>
		<p>
			<h2>Ce site a été développé par :</h2>
			<table cellspacing="10px" cellpadding="10px;">
				<tr>
					<th>
						Prenom
					</th>
					<th>
						Nom
					</th>
					<th>
						Âge
					</th>
					<th>
						Fonction
					</th>
					<th>
						Email
					</th>
				</tr>
				<?php 
				try{
					$bdd = new PDO('mysql:host=localhost;dbname=Ertay;charset=utf8', 'Ertay', 'reM6');
				}
				catch (Exception $e){

					die("Erreur ".$e->getMessage());

				}

				$requetePersonnes = $bdd->query('Select * from PERSONNE');


				while ($personne = $requetePersonnes->fetch())
				{
					?>
					<tr>
						<td>
							<?php echo $personne["prenom"]; ?>
						</td>
						<td>
							<?php echo $personne["nom"]; ?>
						</td>
						<td>
							<?php echo $personne["age"]; ?> ans
						</td>
						<td>
							<?php echo $personne["fonction"]; ?>
						</td>
						<td>
							<?php echo $personne["email"]; ?>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</p>

	</section>

	<section>
		<h2>
			Curriculum Vitae
		</h2>
		<p>Tout cela n'est pas que pure dévotion de notre part ! Nous voulons aussi donner un coup de pouce à des collègues ! <br />
		Vous pourrez trouver leurs CV ci-dessous, ils recherchent du travail et ne sont pas peu doués !</p>
		<table cellspacing="10px" cellpadding="10px;">
			<tr>
				<th>
					Nom du collègue
				</th>
				<th>
					CV
				</th>
			</tr>
			<?php 
				$requeteCV = $bdd->query("Select * from CV");

				while ($personneCV = $requeteCV->fetch())
				{
			 ?>

			 <tr>
			 	<td>
			 		<?php echo $personneCV["nom"]; ?>
			 	</td>
			 	<td>
			 		<a href="<?php echo $personneCV["lienVersCV"]; ?>" class="no-smoothState">CV</a>
			 	</td>
			 </tr>

			 <?php 
			 	}
			  ?>
		</table>
	</section>

	<section>

		<h2>La soute du vaisseau</h2>
		<p>
			Ici nous avons mis tout et n'importe quoi ! C'est un peu la soute du vaisseau !<br/>
			Comme par exemple :
		</p>
		<br>
		<a href="https://www.youtube.com/watch?v=3Xl0Qr0uXuY">
			Ici une petite vidéo bien rigolote ! (En plus c'est nos collègues qui jouent dedans !)
		</a>
		<br>
		<br>
		<iframe src="http://www.youtube.com/embed/3Xl0Qr0uXuY" height=300 width=500>
			Votre navigateur ne prend pas en compte les vidéos Youtube intégrés.
		</iframe>
	</section>

	<div>Icône GitHub fait par <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> de <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</section>
