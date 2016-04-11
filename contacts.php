 <!--
		---- Site web: icej-ao.org
		---- Developpeurs: Nehemie Ziguy KOUADIO , Dominique MENSAH,
		---- Sosthene FRONDO , Konan Louis-Serge N'GUESSAN
		---- Date: 02 03 2016-->

		<!-- CONTACTER ICEJ AFRIQUE DE L'OUEST -->
		<?php include("header.php")
?>
<?php include("navigation.html")
		?>
		<!-- Start Contact Section -->	
				<div class = "container  mycontainer">
					<div class = "row">
						<div class = "col-sm-12 col-lg-12">
							<h1 class = "h1">Nous Contacter</h1>
						</div>
					</div>
				<br></br>
				<br></br>
					<div class = "row">
						<div class = "col-md-8">
							<div class = "well well-sm">
								<form name="sentMessage" id="contactForm" novalidate>
									<div class = "row">
										<div class = "col-md-6">
											<div class="control-group form-group">
												<div class="controls">
													<label for = "name">Nom</label>
													<input type = "text" class = "form-control" id = "name" placeholder = "Entrer votre nom complet" required data-validation-required-message="SVP veuillez entrer votre nom complet." />
												</div>
											</div>
											<div class="control-group form-group">
												<div class="controls">
													<label for = "email">Email</label>
													<div class = "input-group">
														<span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span>
														</span>
														<input type = "email" class = "form-control" id = "email" placeholder = "Entrer votre adresse email" required data-validation-required-message="SVP veuillez entrer votre adresse email." />
													</div>
												</div>
											</div>
											<div class="control-group form-group">
												<div class="controls">
													<label for = "subject">Objet</label>
													<input class = "form-control" placeholder= "Entrer l'objet de votre message" id = "objet" type = "text" required data-validation-required-message="SVP veuillez entrer l'objet de votre message."/>
												</div>
											</div>
										</div>
										<div class = "col-md-6">
											<div class="control-group form-group">
												<div class="controls">
													<label for = "name">Message</label>
													<textarea name = "message" id = "message" class = "form-control" rows = "9" cols = "25" placeholder = "Taper votre message ici" required data-validation-required-message="SVP veuillez entrer votre message."></textarea>
												</div>
											</div>
										</div>
										<div class = "col-md-12">
											<button class = "btn btn-primary pull-right" type = "submit" ><i class="fa fa-send fa-2x"></i> Envoyer </button>
										</div>
									</div>
									<div class="row">
										<div id="success"></div>
										<div id="success2"></div>
									</div>
								</form>
							</div>
						</div>
						<div class = "col-md-4">					
							<legend>Nos bureaux</legend>
							<address>
								<strong>Siège social Côte d'Ivoire</strong><br />
								Siège social: Abidjan, Cocody Angré star 12, face CNPS <br/>
								Adresse postale: 04 BP 12 Abidjan 04 <br/>
								<abbr title = "telephone">Contacts téléphoniques</abbr> (+225) 22 50 02 65 <br/>
								<abbr title="email"> email: </abbr> ao.icej@gmail.com
							</address>
							<address>
								<strong>ICEJ Afrique de l'Ouest</strong><br />
								<!-- <a href = "mailto:#">first.last@example.com</a> -->
							</address>	
							<legend> La fiche de manifestation d'intérêt</legend>
							<div class="animated pulse infinite">
								<a href="fiche/fiche_interet.pdf" target="_blank"><span class = "fa fa-share"></span>Télécharger</a>
							</div><br></br>
							<p>
							Renvoyer la fiche remplie à l'adresse Email suivante: <b>ao.icej@gmail.com</b><br></br>
							</p>
						</div>
					</div>
				</div>    
		<!-- End Contact Section -->
		<?php include("pieddepage.html")
?>