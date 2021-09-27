 <body>
  
  

    <!-- Header Section Start -->

  <header id="hero-area">  
      <!-- Main Carousel Section -->
      <div id="carousel-area">
	  
	  
	        <!-- Navigation Bar (Dont forget to modify the # later !!!) -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
      <!--      <a href="index.html" class="navbar-brand"><img class="img-fulid" src="img/logo.png" alt=""></a> -->   <!-- This part is for the Logo (Add it later) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
      <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="http://localhost/sitexip">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="jobs">Je postule en ligne</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="">Universités et News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="conseil">Conseil XIP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="entreprise">Je deviens Partenaire XIP</a>
              </li>
           
            </ul>
          </div>
        </div>
		
		
		

        <!-- Navigation pour le mobile (Tested only for my S51) -->
     <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="index.html">Accueil</a>
            </li>
            <li>
              <a class="page-scroll" href="jobs.html">Je postule en ligne</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Universités et News</a>
            </li>
            <li>
              <a class="page-scroll" href="conseil.html">Conseil XIP</a>
            </li>
            <li>
              <a class="page-scroll" href="entreprise.html">Je deviens Partenaire XIP</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>	  
	  
	  
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="assets/img/steps/Slider-entreprise.jpg" alt="">
              <div class="carousel-caption text-center">   
<h2 class="wow fadeInRight" data-wow-delay="0.6s">You êtes une entreprise qui recrute?</h2> 			  
              </div>
            </div>
         
          
          </div>
        
      
        </div>
      </div>  

    </header>

    <!-- Header Section End --> 
  
    <!-- Conseil Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section" style="background: #fff !important;" data-stellar-background-ratio="-0.2">   


 <div class="section-header">          
          <h2 style="font-size: 20px !important;" class="section-title">Contactez-nous pour toutes questions relatives à notre société ou nos services. <br>Nou ferons notes possible pour revenir vers vous au plus vite.</h2>
          <hr class="lines">
        </div>
	
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-4 col-sm-4 col-xs-12">
            </div>     
            <div class="col-lg-4 col-sm-4 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
					
					 <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Numéro de téléphone" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
					
					 <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Email" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
					
					 <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre Société" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
					
					 <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Secteur d'activité" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
					
					
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Poste à pourvoir" id="email" class="form-control" name="name" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Votre question" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Envoyer</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
			 <div class="col-lg-4 col-sm-4 col-xs-12">
            </div>     
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->