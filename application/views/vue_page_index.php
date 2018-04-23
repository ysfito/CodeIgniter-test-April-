<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gestion des Utilisateurs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css" ?> ">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href=" <?php echo base_url()."assets/css/plugins.css" ?>"/>
        <link rel="stylesheet" href="<?php echo base_url(). "assets/css/linearicons-web-font.css" ?>"/>
        <link rel="stylesheet" href=" <?php echo base_url()."assets/css/santeliascript-web-font.css" ?>" />
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/lato-webfont.css" ?>" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/style.css" ?> ">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/responsive.css"?>"/>

		<script src=" <?php echo base_url()."assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"?>" ></script>
		
		<style>
			 .imgAffiche{
				 width: 100%;
				 height: 180px;
				 margin-top:100px;
			 }
			 .share{
				margin-top:350px;
			 }
			
		
		</style>
    </head>
    <body data-spy="scroll" data-target="#main-navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
		
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
					
                    <a class="navbar-brand" href="#"><h5>Karangue Assurance</h5></a>
                </div>
				

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

		<!--Home page style-->
		<header id="home" class="home">
            <div class="overlay-img">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="home-content text-center">
								
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										<li data-target="#carousel-example-generic" data-slide-to="3"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									  
										<div class="item active">
											<h2>Votre assurance voyage et santé internationale en plus facile</h2>
										</div>
										
										<div class="item">
											<h2>Vous recherchez une assurance pour ?</h2>
											<h5>Votre Santé à l'international</h5>
										</div>
										
										<div class="item">
											<h5>Vos Vacances</h5>
										</div>
										
										<div class="item">
											<h5>Vos Etudes à l'étranger</h5>
										</div>

										<div class="item">
											<h5>Votre PVT/ séjour au pair/ Volontariat International</h5>
										</div>
										

									  </div>

									 
								</div>
								

                            </div>
                        </div>
                    </div>

                </div>
            </div>	
        </header>
		

        </section>
		
		
		<!-- Sections -->
        <section id="portfolio" class="sections">
			<div class="heading-content text-center">
				<span class="lnr lnr-file-empty">
				<h4>Nos Services</h4>
				
			</div>
			
			<div class="container imgNosService">
					
					<div class="row">
					
						<div class="col-md-3 col-sm-6 col-xs-12">

							<div class="portfolio-item">
								<div class="card img-overlay">
								<a class="portfolio-img card-img-top" href="<?php echo base_url()."assets/images/portfolio/etude.jpeg"?>"><img src="<?php echo base_url()."assets/images/portfolio/etude.jpeg"?>"  class="imgAffiche" alt="" /></a>
								<div class="img-overlay"></div>
	
								<div class="card-body">
									<p class="card-text">Assurance Etudes Exterieurs</p>
								</div>
								</div>
							</div>

						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12">

							<div class="portfolio-item">
								<div class="card img-overlay">
								<a class="portfolio-img" href="<?php echo base_url()."assets/images/portfolio/santé.jpeg"?>"><img src="<?php echo base_url()."assets/images/portfolio/santé.jpeg"?>"  class="imgAffiche"	 alt="" /></a>
								<div class="img-overlay"></div>
	
								<div class="card-body">
									<p class="card-text">Assurance Santé</p>
								</div>
								</div>
							</div>

						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12">



							<div class="portfolio-item">
								<div class="card img-overlay">
								<a class="portfolio-img" href="<?php echo base_url()."assets/images/portfolio/voyage.jpeg"?>"><img src="<?php echo base_url()."assets/images/portfolio/voyage.jpeg"?>"  class="imgAffiche" alt="" /></a>
								<div class="img-overlay"></div>
	
								<div class="card-body">
									<p class="card-text">Assurance Voyage</p>
								</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12">

							<div class="portfolio-item">
								<div class="card img-overlay">
								<a class="portfolio-img" href="<?php echo base_url()."assets/images/portfolio/vacance.jpeg"?>"><img src="<?php echo base_url()."assets/images/portfolio/vacance.jpeg"?>" class="imgAffiche" alt="" /></a>
								<div class="img-overlay"></div>
	
								<div class="card-body">
									<p class="card-text">Assurance Vacances</p>
								</div>
								</div>
							</div>
						</div>

					</div>
						
					</div>

					<div class="row share">
						<div class="col-md-12">
							<div class="social">
							
								<ul>
									<li class="share">Share:</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								
							</div>
							<div class="item-overlay"></div>
						</div>
					</div>
				
			</div>	
			
        </section>
		
		  <!-- Sections -->
		  <section id="parallax" class="sections text-center">
			
			<div class="heading-content">
				<span class="lnr lnr-user"></span>
				<h4>Mon compte</h4>

			<div style="justify-content:space-between;">


			 <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-outline-secondary">Espace Administrateur </button>


			 <button type="button"data-toggle="modal" data-target="#exampleModalLong"  class="btn btn-outline-secondary">Proposer un Contract </button>

			<button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-outline-secondary">Espace Commercial</button>

			<button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-outline-secondary">Espace Consultant</button>
	
		</div>

	</div>



		<!-- Sections -->
        <section id="google-map" class="sections2">
			<div class="heading-content text-center">
				<span class="lnr lnr-map">
				<h4>Retrouver moi sur</h4>
				
				<div class="heading-icon">
					<a href="#"><i class="fa fa-recycle"></i></a>
					<a href="#"><i class="fa fa-flickr"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				
				
			</div>
			
			<div class="map-area">
				<div id="map"></div>
			</div>	
			
        </section>
		
	<section id="contact" class="">
	 <div class="overlay-img sections">
		<div class="container">

            <div class="heading-content text-center">
               
                <h3>Interessé par nos prestations? Contacter Nous!</h3>

            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <form>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control txt-area" rows="6" placeholder="Message . . ."></textarea>
                            </div>
                        </div>

                        <div class="contact-button"><button type="button" class="btn btn-default btn-lg">Envoyer</button></div>
                    </form>

                </div>
            </div>
			
		
			
        </div>
	</div>
	</section>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  
      <div class="modal-body">

	  <form method="post" name="formConnex">
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  id="mail" name="email" placeholder="azert@gmail.com">
  </div>


<div class="form-group">

	  <label>Profil</label>
	  
	  <select id='inputState' class='form-control' style=' color: black'>
		  <?php foreach($profil as $val)
			{ echo '<option  style="color: black" value="'.$val->profil.'">'.$val->profil.'</option>'; }?>

			</select>
</div>

<div></div>

  <div class="form-group">
    <label>Mot de passe</label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Mot de passe">
  </div>

  <a type="submit" class="btn btn-secondary">Se Connecter</a>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

        <!--Footer-->
        <footer>
           
        </footer>


        <script src="<?php echo base_url()."assets/js/vendor/jquery-1.11.2.min.js"?>"></script>
        <script src="<?php echo base_url()."assets/js/vendor/bootstrap.min.js"?>"></script>
		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="http://maps.google.com/maps/api/js"></script>
		<script src="<?php echo base_url()."assets/js/vendor/gmaps.min.js"?>"></script>
		<script src="<?php echo base_url()."assets/js/vendor/jquery.magnific-popup.min.js"?>"></script>
		
        <script src="<?php echo base_url()."assets/js/plugins.js"?>"></script>
        <script src="<?php echo base_url()."assets/js/main.js"?>"></script>
    </body>
</html>