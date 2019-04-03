<?php
session_start();
/*require 'dbconfig/config.php';*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>MajiVoice 2.0</title>
		<meta name="keywords" content="NEXO Responsive HTML5 Template" />
		<meta name="description" content="NEXO - Responsive HTML5 Template">
		<meta name="author" content="nexodigital">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">

		<!-- CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">		
		<link rel="stylesheet" href="css/slick.min.css">
		<link rel="stylesheet" href="css/slick-theme.min.css">
		<link rel="stylesheet" href="css/style.css">		

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css" />
       
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/manifest.json">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="img/favicon/favicon.ico">
        <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
		<noscript>
			<style>.loader-bg, .loader { display: none; } </style>
		</noscript>        
	</head>
	
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div class="loader-container"><div class="loader"></div></div>
		<header id="header">
			<div class="white-bg"></div>
			<div class="menu-spacer"></div>
				<nav id="nav" class="navbar" data-spy="affix" data-offset-top="77">
				  <div id="header-container" class="container navbar-container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MainNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<div class="logo">
							<span class="helper"></span><a href="index.html"><img alt="NEXO" src="img/logo.png" srcset="img/logo@2x.png 2x"></a>
						</div>
						<div class="logo-affix">
							<span class="helper"></span><a href="#header"><img alt="NEXO" src="img/logo-invert.png" srcset="img/logo-invert@2x.png 2x"></a>
						</div>							
					</div>
					<div class="collapse navbar-collapse" id="MainNavbar">
					  <ul class="nav navbar-nav navbar-right">
						<li><a href="#about" data-target=".navbar-collapse.in">About</a></li>
						<li><a href="#features" data-target=".navbar-collapse.in">Features</a></li>
						<li><a href="#gallery" data-target=".navbar-collapse.in">Gallery</a></li>
						<li><a href="#team" data-target=".navbar-collapse.in">Team</a></li>
						<li><a href="#testimonials" data-target=".navbar-collapse.in">Testimonials</a></li>
						<li><a href="#extra-sections" data-target=".navbar-collapse.in">Extra</a></li>
						<li><a href="#contact" data-target=".navbar-collapse.in">Contact</a></li>
					   
					   <li><form action = Portal.php method = "post">
				       <input background-color: #094479; name = "logout" type = "submit" value = "Log Out"/>
				      </form></li>
				  
				  <?php
				     if(isset($_POST['logout']))
					 {
						session_destroy();
					    header('location:LoginPage.php');
					 }
				  ?>
					  </ul>
					</div>
				  </div>
				 
				  
				</nav>
            <div class="container">
				<div class="welcome">
					<h1>NYERI WATER AND SEWARAGE COMPANY</h1>
					<p>Ensuring satisfaction and quality services to all our customers.</p>
					<div>
						<a href="dashboard.php" class="btn-purchase blue">LAUNCH COMPLAIN</a>
					</div>
					<div>
						<a href="#about"><img alt="Read About NEXO" class="pulse" src="img/icons/scroll.png"></a>
					</div>
				</div>
			</div>
		</header>

		<section id="about">
			<div class="container">
                <div class="row">
					<div class="col-md-6 mobile-center"><img alt="About NEXO" src="img/about.jpg"></div>
					<div class="col-md-6">
						<div class="content">
                            <h2>About Majivoice.</h2>
                            <p>Majivoice is a next generation customer feedback system developed by NYEWASCO to improve customer services and take customer satisfaction to the next level.</p>
                            <div>
                                <a href="#" class="btn-purchase" data-toggle="modal" data-target="#aboutModal">MORE ABOUT US</a>
                            </div>
                            
                            <!--===== MODAL ABOUT START =====-->
                            
                            <div class="modal fade modal-fullscreen force-fullscreen" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                          <div class="modal-header">
                                            <a class="back-chevron" href="#" data-dismiss="modal" aria-hidden="true"><i class="fa fa-chevron-left pulse-horizontal" aria-hidden="true"></i></a>
                                          </div>               
                                            <div class="content">
                                                <h2>NYEWASCO</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <img src="img/about-modal.jpg">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>    
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                              </div>
                            </div>          
                                            
                            <!--===== MODAL ABOUT END =====-->
                            
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="features" class="bg-color">
			<div class="container">
				<div class="content">
                    <div class="header">	
                        <h2>Additional Features</h2>
                        <p>Just a few of top class standards to expect form us.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 m-margin">
                        <img src="img/icons/icon-1.png" alt="Modern & Unique Design">
                        <h3>Modern & Unique Design</h3>
                        <p>Eye-catching and minimalistic design, all this beauty jsut for you. Its not just about service delivery, its about you enjoying every second of it.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 m-margin">
                        <img src="img/icons/icon-2.png" alt="Mobile First Approach">
                        <h3>Fully Responsive</h3>
                        <p>Mobile-ready website ensures a seamless and consistent experience that adapts to your resolution meaning its accessible from your own mobile device. </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <img src="img/icons/icon-3.png" alt="Ready to use">
                        <h3>Ready to use</h3>
                        <p>Access us and keep in contact at all times 24/7, this thing is not breaking down anytime soon or ever. Taking customer experience to the next level</p>
                    </div>
                    <div style="clear:both;"></div>
				</div>
			</div>
		</section>

 

		<section id="stats" class="cta cta-bg cta-image-1">
			<div class="container">
				<div class="content" id="counter">
					<div class="col-md-4 col-sm-4">
						<span class="counter-value" data-count="2500">0</span>
						<p>employees</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<span class="counter-value" data-count="10000">0</span>
						<p>clients</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<span class="counter-value" data-count="1">0</span>
						<p>cities</p>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</section>	

		<section id="gallery">
			<div class="container-fluid">
				<div class="content">
					<div class="header">	
						<h2>Gallery</h2>
						<p>A few accomplishments made in the years serving you.</p>
					</div>
					<div class="gallery">
						<div>
						  <img src="img/gallery/photo-01.jpg" alt="Photo 1">
						</div>
						<div>
						  <img src="img/gallery/photo-02.jpg" alt="Photo 2">
						</div>
						<div>
						  <img src="img/gallery/photo-03.jpg" alt="Photo 3">
						</div>
						<div>
						  <img src="img/gallery/photo-04.jpg" alt="Photo 4">
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section id="team" class="bg-color">
			<div class="container">
				<div class="content">
					<div class="header">
						<h2>Team</h2>
						<p>The peaople Working to keep that smile on your face</p>
					</div>
					<ul class="team">	
						<li class="m-margin">
						    <div class="overlay-container" onclick="void(0)">
							    <img src="img/team/team-01.jpg" alt="Team Member 1">
							    <div class="overlay">
                                    <div class="overlay-info">
                                        <div class="social">
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
							</div>
							<h4>Peter Gichaga</h4>
							<p>MANAGER</p>
						</li>
						<li class="m-margin">
						    <div class="overlay-container" onclick="void(0)">
							    <img src="img/team/team-02.jpg" alt="Team Member 2">
							    <div class="overlay">
                                    <div class="overlay-info">
                                        <div class="social">
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
							</div>
							<h4>Willie Harper</h4>
							<p>Operations Director</p>									  
						</li>
						<li>
						    <div class="overlay-container" onclick="void(0)">
							    <img src="img/team/team-03.jpg" alt="Team Member 3">
							    <div class="overlay">
                                    <div class="overlay-info">
                                        <div class="social">
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
							</div>
							<h4>Gregory Moreno</h4>
							<p>Technical Director</p>									  
						</li>											
					</ul>				
				</div>
			</div>
		</section>
		
		<section id="contact-us" class="cta cta-bg cta-image-2">
			<div class="container">
				<div class="content flex-around">
					<div class="box-container">
						<div class="inner">
							<h3>Contact Us</h3>
							<p>We are here to answer any question you may have about our operations.  </p>
						</div>
					</div>
					<div class="box-container">
						<a href="#contact" class="btn-purchase white">GET IN TOUCH</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</section>

		<section id="clients">
			<div class="container">
				<div class="content">
                    <div class="header">	
                        <h2>Clients</h2>
                        <p>You can easily add logos to show companies you working with.</p>
                    </div>
					<div class="clients">
						<div>
						  <img src="img/clients/logo-01.png" alt="Client Logo 1">
						</div>
						<div>
						  <img src="img/clients/logo-02.png" alt="Client Logo 2">
						</div>
						<div>
						  <img src="img/clients/logo-03.png" alt="Client Logo 3">
						</div>
						<div>
						  <img src="img/clients/logo-04.png" alt="Client Logo 4">
						</div>
						<div>
						  <img src="img/clients/logo-05.png" alt="Client Logo 5">
						</div>
						<div>
						  <img src="img/clients/logo-06.png" alt="Client Logo 6">
						</div>
					</div>								
				</div>
			</div>
		</section>
		
		<section id="testimonials" class="bg-color">
			<div class="container">
				<div class="content">
                    <div class="header">
                        <h2>Testimonials</h2>
                    </div>
                    <ul class="testimonials">	
                        <li>
                            <p>Great job, I will definitely be ordering again! It really saves me time and effort. website is exactly what our business has been lacking. I would like to personally thank you for your outstanding product. It's exactly what I've been looking for. It's just amazing. Keep up the excellent work.</p>
                            <p><span>Bobby Mitchell  —  Company INC</span></p>
                        </li>
                        <li>
                            <p>Website is the most valuable business resource we have EVER purchased. Website is worth much more than I paid. I am completely blown away. I STRONGLY recommend Template to EVERYONE interested in running a successful online business!</p>
                            <p><span>Grace George  —  Company INC</span></p>
                        </li>
                        <li>
                            <p>I can't say enough about website. I have gotten at least 50 times the value from website. No matter where you go, website is the coolest, most happening thing around! Your company is truly upstanding and is behind its product 100%.</p>
                            <p><span>Arthur White  —  Company INC</span></p>
                        </li>									
                    </ul>
				</div>
			</div>
		</section>

       <section id="extra-sections" class="content-with-graphics left">
			<div class="container">
				<div class="content">
                    <div class="col-md-6 col-sm-12">
                        <div class="text-content">	
                            <h2>Fit even more content <br class="visible-lg">with extra sections.</h2>
                            <p>We created additional sections to use for your content. From simple text and image sections to pricing plan, tabs and accordions. Feel free to use it any direction you want.</p>
                            <a href="#" class="btn-purchase" data-toggle="modal" data-target="#sectionsModal">BROWSE SECTIONS</a>
                             
                        </div>                            
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img src="img/sections.png">
                    </div>                        
 				</div>
			</div>
			
		</section>
       
        <!--===== MODAL MORE SECTIONS START =====-->
        <div class="modal fade modal-fullscreen force-fullscreen" id="sectionsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="modal-header">
                                <a class="back-chevron" href="#" data-dismiss="modal" aria-hidden="true"><i class="fa fa-chevron-left pulse-horizontal" aria-hidden="true"></i></a>
                            </div>               

                              <!-- Pure sections starts here, you can copy them anywhere -->

                            <section id="section-left-content" class="content-with-graphics left">
                                <div class="container">
                                    <div class="content">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="text-content">	
                                                <h2>Your Awesome Content</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                 <a href="#" class="btn-purchase">READ MORE</a>
                                            </div>                            
                                        </div>
                                    <div class="col-md-6 col-sm-12">
                                        <img class="img-padding" src="img/right-image.jpg">
                                    </div>                        
                                </div>
                            </section>

                            <div class="container"><hr></div>

                            <section id="simple-content">
                                <div class="container">
                                    <div class="content">
                                        <h2>This is Interesting!</h2>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="#" class="btn-purchase">READ MORE</a>                    
                                    </div>			
                                </div>
                            </section>		

                            <div class="container"><hr></div>

                            <section id="section-right-content" class="content-with-graphics right">
                                <div class="container">
                                    <div class="content">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="text-content">	
                                                <h2>Your Awesome Content</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                 <a href="#" class="btn-purchase">READ MORE</a>
                                            </div>                            
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="img-padding" src="img/left-image.jpg">
                                        </div>                        
                                    </div>
                                </div>
                            </section>

                            <div class="container"><hr></div>                                          

                            <section id="accordion-section">
                                <div class="container">
                                    <div class="content">
                                        <div class="header">	
                                            <h2>Toggle Your Content Easy</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="panel-group" id="accordion">
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">
                                                Collapsible Content 1</a>
                                              </h4>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse in">
                                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                              commodo consequat.</div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
                                                Collapsible Content 2</a>
                                              </h4>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                              <div class="panel-body">
                                                <ul class="bullets">
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                    <li>Proin eget velit nec velit luctus feugiat.</li>
                                                    <li>Praesent ullamcorper ipsum id sem imperdiet, volutpat faucibus orci sollicitudin.</li>
                                                    <li>Donec sed lectus in quam finibus pretium et nec elit.</li>
                                                    <li>Nulla sit amet mi et nunc dapibus dignissim nec vitae ex.</li>
                                                </ul>                                                      
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
                                                Collapsible Content 3</a>
                                              </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                              commodo consequat.</div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="nexo-tabs">
                                <div class="container">
                                    <div class="content">	
                                        <div class="header">	
                                            <h2>Tab Your Content</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>                    
                                         <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
                                            <li><a data-toggle="tab" href="#tab2">Tab 2</a></li>
                                            <li><a data-toggle="tab" href="#tab3">Tab 3</a></li>
                                            <li><a data-toggle="tab" href="#tab4">Tab 4</a></li>
                                          </ul>

                                          <div class="tab-content">
                                            <div id="tab1" class="tab-pane fade in active">
                                              <p>Proin sed ultrices lacus, vitae porta turpis. Mauris a orci dignissim, tincidunt orci et, mollis turpis. Maecenas eleifend quis eros porttitor suscipit. Morbi placerat tellus non pellentesque pellentesque. Donec porta quis tellus non consectetur. Sed sollicitudin augue in felis aliquet, vitae pretium erat eleifend. Nunc mattis tincidunt massa quis semper. </p>
                                            </div>
                                            <div id="tab2" class="tab-pane fade">
                                              <p>Vestibulum vel tellus blandit, gravida tellus sed, aliquam mauris. Proin quis velit mattis, venenatis massa nec, mollis lectus. Integer in libero tempor, ultrices lorem nec, hendrerit felis. Proin sollicitudin nisi mauris, at sollicitudin nisi elementum vel.</p>
                                            </div>
                                            <div id="tab3" class="tab-pane fade">
                                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                              <p>Proin sed ultrices lacus, vitae porta turpis. Mauris a orci dignissim, tincidunt orci et, mollis turpis. Maecenas eleifend quis eros porttitor suscipit. </p>
                                            </div>
                                            <div id="tab4" class="tab-pane fade">
                                              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                              <p>Proin sed ultrices lacus, vitae porta turpis. Mauris a orci dignissim, tincidunt orci et, mollis turpis. Maecenas eleifend quis eros porttitor suscipit. Morbi placerat tellus non pellentesque pellentesque. Donec porta quis tellus non consectetur. Sed sollicitudin augue in felis aliquet, vitae pretium erat eleifend. </p>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </section> 

                            <section id="pricing-plan">
                                <div class="container">
                                    <div class="content">
                                        <div class="header">
                                            <h2>Pricing plans</h2>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="columns">
                                          <ul class="price">
                                                <li class="header">
                                                    <h3>Basic</h3>
                                                    <p class="value"><sup>$ </sup><span>15</span><sub> /mo</sub></p>
                                                    <p>* For beginners.</p>
                                                </li>
                                            <li>10GB Storage</li>
                                            <li>10 Emails</li>
                                            <li>10 Domains</li>
                                            <li>1GB Bandwidth</li>
                                            <li class="footer">
                                                <a href="#" class="btn-purchase">PURCHASE</a>
                                                <p>* Please read carefully.</p>
                                            </li>
                                          </ul>
                                        </div>

                                        <div class="columns">
                                          <ul class="price">
                                                 <li class="header featured">
                                                    <h3>Plus</h3>
                                                    <p class="value"><sup>$ </sup><span>28</span><sub> /mo</sub></p>
                                                    <p>Complete app building platform.</p>
                                                </li>
                                            <li>25GB Storage</li>
                                            <li>25 Emails</li>
                                            <li>25 Domains</li>
                                            <li>2GB Bandwidth</li>
                                            <li class="footer">
                                                <a href="#" class="btn-purchase">PURCHASE</a>
                                                <p>* Please read carefully.</p>
                                            </li>
                                          </ul>
                                        </div>

                                        <div class="columns">
                                          <ul class="price">
                                                <li class="header">
                                                    <h3>Premium</h3>
                                                    <p class="value"><sup>$ </sup><span>36</span><sub> /mo</sub></p>
                                                    <p>Advanced features & controls.</p>
                                                </li>
                                            <li>50GB Storage</li>
                                            <li>50 Emails</li>
                                            <li>50 Domains</li>
                                            <li>5GB Bandwidth</li>
                                            <li class="footer">
                                                <a href="#" class="btn-purchase">PURCHASE</a>
                                                <p>* Please read carefully.</p>
                                            </li>
                                          </ul>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </section>	

                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <!--===== MODAL MORE SECTIONS END =====-->  		
						
		<section id="newsletter" class="cta cta-bg cta-image-3">
			<div class="container">
				<div class="content">
					<h3>Sign up to our newsletter</h3>
					<form id="signup" name="signup" action="php/subscribe.php" method="post" data-toggle="validator">
						<div id="signup-results"></div>
						<div id="signup-body">                    
					    <fieldset>
					        <div class="form-group">
						        <input type="email" value="" placeholder="Enter your email address" name="emailn" id="emailn" class="form-email" required/>
						        <input id="signup" type="submit" value="SIGN UP" class="form-submit"/>
						        <div class="help-block with-errors"></div>
                            </div>
                        </fieldset>
                        </div>
					</form>
				</div>
			</div>
		</section> 
		
		<section id="contact">
			<div class="container">
				<div class="content">
					<div class="header">	
						<h2>Contact</h2>
						<p>Please use contact form below to get in touch with us. We we'll respond as soon as we can.</p>
					</div>
					<form id="contact-form" name="contact-form" action="php/sendmail.php" method="post" data-toggle="validator">
						<div id="contact-results"></div>
						<div id="contact-body">
							<fieldset>
								<div class="form-group col-sm-4 ">
									<input type="text" name="name" id="name"  value="" placeholder="Name" required>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-4 ">
									<input type="email" name="email" id="email" value="" placeholder="Email" required>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-4 ">
									<input type="text" name="phone" id="phone" placeholder="Phone">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-12 ">
									<textarea name="message" id="message" rows="6" cols="50" placeholder="Message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-12">
									<label for="submit"></label>
									<input id="submit" type="submit" name="submit" value="SEND" class="btn btn-primary">
								</div>
							</fieldset>
						</div>
					</form>
				</div>
			</div>
		</section>

		<footer>
			<div id="footer" class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div id="map"  style="width:100%;height:450px;"></div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="inside">
                            <div class="address">
                                <h4>Address</h4>
                                <p>Uptown down Road<br />Nyeri Town, BOX 676, NYERI</p>							
                            </div>
                            <div class="contact-info">
                                <div class="col-md-4 col-xs-12 m-margin">
                                    <h4>Telephone</h4>
                                    <p><a href="tel:07938857242">079 3885 7242</a></p>		
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <h4>Email</h4>
                                    <p><a href="mailto:office@nexocreative.com">office@nexocreative.com</a></p>
                                </div>								
                            </div>
                            <div class="social">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="bottom-footer"><p>© 2017 MAJIVOICE2.0. All Rights Reserved.</p></div>
                    </div>
                </div>
			</div>
		</footer>
        
        <!-- scroll to top of the page-->
		<a id="scrollup" class="scrollup" href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        
        <!-- Javascript -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/validator.min.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3XgCNAa2O_WR6HfnJahVSKKNUZVqvkPg&callback=initMap"></script>		
		<script src="js/nexo-script.js"></script> 

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108812818-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108812818-1');
		</script>

	</body>
</html>