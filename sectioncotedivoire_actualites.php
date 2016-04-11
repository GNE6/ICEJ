 <!--
		---- Site web: icej-ao.org
		---- Developpeurs: Nehemie Ziguy KOUADIO , Dominique MENSAH,
		---- Sosthene FRONDO , Konan Louis-Serge N'GUESSAN
		---- Date: 02 03 2016-->

		<!-- ACTUALITES ICEJ COTE D'IVOIRE -->
		<?php include("header.php")
?>
		<?php include("navigation_cotedivoire.html");
        ?>

                <div class="container mycontainer">
                	<div class="row">
                        <div class="section-title text-center mytitle">
                            <h3>ACTUALITES</h3>
                        </div>
                    </div>
					 <div class="row">
					 	<div class="col-md-2">
					 	</div>
					 	<!--start remise de diplomes section-->
						<div class="col-md-3">
							<div class="portfolio-item">
								<img src="images/portfolio/thumb/remise_diplome_sukkot_2015_thumb.JPG" class="img-responsive" alt="REMISE DE DIPLOMES DE PARTICIPATION AU SUKKOT 2015">
								<a href="images/events/remise_diplome_sukkot_2015/1.JPG" data-toggle="lightbox" data-gallery="remise_diplome_sukkot_2015" data-title="REMISE DE DIPLOMES DE PARTICIPATION AU SUKKOT 2015" >
									<div class="portfolio-details text-center">
										<h4>REMISE DE DIPLOMES DE PARTICIPATION AU SUKKOT 2015</h4>
									</div>
								</a>
							</div>
							<h4>REMISE DE DIPLOMES DE PARTICIPATION AU SUKKOT 2015</h4>
						</div>		
						<!--end remise de diplomes section-->
						
						<!--start conference icej abidjan section-->
						<div class="col-md-3">
							<div class="portfolio-item">
								<img src="images/portfolio/thumb/conference_icej_abidjan_thumb.JPG" class="img-responsive" alt="CONFERENCE ICEJ ABIDJAN JANVIER 2016">
								<a href="images/events/conference_icej_abj_2016/1.JPG" data-toggle="lightbox" data-gallery="conference_icej_abj_2016" data-title="CONFERENCE ICEJ ABIDJAN JANVIER 2016" >
									<div class="portfolio-details text-center">
										<h4>CONFERENCE ICEJ ABIDJAN JANVIER 2016</h4>
									</div>
								</a>
							</div>
							<h4>CONFERENCE ICEJ ABIDJAN JANVIER 2016</h4>
						</div>	
						<div class="col-md-3">
							<div class="portfolio-item">
								<img src="images/portfolio/thumb/rencontre_ambassadeur_israel_thumb.jpg" class="img-responsive" alt="PRESENTATION DES ACTIVITES ICEJ AFRIQUE DE L'OUEST A L'AMBASSADEUR D'ISRAEL EN COTE D'IVOIRE 16 MARS 2016">
								<a href="images/events/rencontre_ambassadeur_israel/FILM2.JPG" data-toggle="lightbox" data-gallery="rencontre_ambassadeur_israel" data-title="PRESENTATION DES ACTIVITES ICEJ AFRIQUE DE L'OUEST
								 A L'AMBASSADEUR D'ISRAEL EN COTE D'IVOIRE 16 MARS 2016" >
									<div class="portfolio-details text-center">
										<h4>PRESENTATION DES ACTIVITES ICEJ AFRIQUE DE L'OUEST A L'AMBASSADEUR D'ISRAEL EN COTE D'IVOIRE 16 MARS 2016</h4>
									</div>
								</a>
							</div>
							<h4>PRESENTATION DES ACTIVITES ICEJ AFRIQUE DE L'OUEST A L'AMBASSADEUR D'ISRAEL EN COTE D'IVOIRE 16 MARS 2016</h4>
						</div>
							
						<!--end conference icej abidjan section-->
						<?php
							init_portofolio("images/events/remise_diplome_sukkot_2015/","JPG","remise_diplome_sukkot_2015","REMISE DE DIPLOMES DE PARTICIPATION AU SUKKOT 2015",2,27);/*27*/
						?>
						<?php
							init_portofolio("images/events/conference_icej_abj_2016/","JPG","conference_icej_abj_2016","CONFERENCE ICEJ ABIDJAN JANVIER 2016",2,128);/*128*/
						?>
						<?php
							init_portofolio_legend("images/events/rencontre_ambassadeur_israel/","rencontre_ambassadeur_israel","PRESENTATION DES ACTIVITES ICEJ AFRIQUE DE L'OUEST
								 A L'AMBASSADEUR D'ISRAEL EN COTE D'IVOIRE 16 MARS 2016" );
						?>
					 </div>
                </div>    
<?php include("pieddepage.html")
?>
