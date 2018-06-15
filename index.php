<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smak -Free Single page html template by GraphBerry</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<script src="js/modernizr.custom.js"></script>
	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <?php 
    require ('languages/vi.php');
    $lang = json_decode($lang);
    print_r($lang->navbar->Home);
    ?>
	<div class="loader">
		<div class="project-loader">
			<div class="bubblingG">
				<span id="bubblingG_1"></span>
				<span id="bubblingG_2"></span>
				<span id="bubblingG_3"></span>
			</div>
		</div>
	</div>
	<div class="loading" id="wrapper">
		<!-- Fixed navbar -->
		<div class="navbar navbar-smak navbar-fixed-top " id="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand animate" href="#"><img src="img/logo.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
						<li><a href="#home">Home</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#clients">Clients</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
		<div style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>
		<section id="home" class="home home-fullscreen">
			<div class="slide text-slider-wrapper">
				<div class="container">
					<ul class="text-slider clearfix">
						<li class="clearfix">
							<span class="lead">Branding have another definition</span>
							<a href="http://graphberry.com/item/smak-one-page-web-template" class="btn btn-primary outline-outward">Get it</a>
						</li>
						<li class="clearfix">
							<span class="lead">Branding have another definition</span>
							<a href="http://graphberry.com/item/smak-one-page-web-template" class="btn btn-primary outline-outward">Get it</a>
						</li>
						<li class="clearfix">
							<span class="lead">Branding have another definition</span>
							<a href="http://graphberry.com/item/smak-one-page-web-template" class="btn btn-primary outline-outward">Get it</a>
						</li>
					</ul>
				</div>
			</div>
			<a href="#services" class="go-to godown">
				<span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
				</span>
			</a>
		</section>
		<section id="services" class="gray">
			<div class="container pad-bot-50">
				<div class="heading">
					<div>Our services</div>
					<h1>What we love to do</h1>
					<div class="divider"><span></span></div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="service-item fadeInDown">
							<div class="circle circle-l"><i class="fa fa-css3 fa-3x"></i></div>
							<h3>Web design</h3>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elits</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="service-item fadeInUp">
							<div class="circle circle-l"><i class="fa fa-pencil fa-3x"></i></div>
							<h3>Graphic design</h3>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elits</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="service-item fadeInDown">
							<div class="circle circle-l"><i class="fa fa-camera fa-3x"></i></div>
							<h3>Photography</h3>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elits</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="service-item fadeInUp">
							<div class="circle circle-l"><i class="fa fa-gear fa-3x"></i></div>
							<h3>Developing</h3>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elits</p>
						</div>
					</div>
				</div>
			</div>
			<div class="branded-section process">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<h3 class="primary-color">How we do it</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<div class="process-item ">
									<i class="fa fa-flask fa-3x"></i>
									<h3>Analize</h3>
									<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="process-item delay1">
									<i class="fa fa-inbox fa-3x"></i>
									<h3>Preapering</h3>
									<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="process-item delay2">
									<i class="fa fa-gavel fa-3x"></i>
									<h3>Working</h3>
									<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="process-item delay3">
									<i class="fa fa-flag-checkered fa-3x"></i>
									<h3>Finalize</h3>
									<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="process-item delay4">
									<i class="fa fa-stethoscope fa-3x"></i>
									<h3>Testing</h3>
									<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="process-item delay5">
									<i class="fa fa-truck  fa-3x"></i>
									<h3>Deliver</h3>
									<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio" id="portfolio">
			<div class="container">
				<div class="heading">
					<div>Our references</div>
					<h1>What we done so far</h1>
					<div class="divider"><span></span></div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
				</div>
				<div class="centered-pills">
					<ul class="nav nav-pills">
						<li class="filter" data-filter="all">
							<a href="javascript:void(0)">All</a>
						</li>
						<li class="filter" data-filter="web-design">
							<a href="javascript:void(0)">Web design</a>
						</li>
						<li class="filter" data-filter="g-design">
							<a href="javascript:void(0)">Graphic design</a>
						</li>
						<li class="filter" data-filter="photography">
							<a href="javascript:void(0)">Photography</a>
						</li>
						<li class="filter" data-filter="illustraion">
							<a href="javascript:void(0)">Illustration</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div id="single-project"></div>
			</div>
			<div>
				<ul class="full-portfolio clearfix" id="Grid">
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Moderno</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item g-design">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-1.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>App Screen Showcase</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item photography">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Molly</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item illustraion">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Workspace Elements</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">AI / PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-1.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Vintage Logo Insignias</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">AI / ESP</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item g-design">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Retro Vetor Badges</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">AI</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item photography">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Mentum</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item illustraion">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Flat Browser Mockup</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">AI / PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Flying Business Cards</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item g-design">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-1.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Tri Fold Brochure</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item photography">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>iPhone 6 Mockups</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">AI / PSD</p>
							</div>
						</a>
					</li>
					<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item illustraion">
						<a href="ajax/project-1.html">
							<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">
							<div class="mask">
								<h4>Large Poster Mockup</h4>
								<div class="divider"><span></span></div>
								<p class="font-m">PSD</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="container">
				<div class="heading">
					<h1>Do you like our portfolio?</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
				</div>
				<div style="text-align:center; margin-bottom: 50px">
					<a href="#contact" class="btn btn-primary">Contact Us</a>
				</div>
			</div>	
			<div class="branded-section numbers">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<h2>We are proud of these numbers</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam donummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="number-item">
									<span class="number" id="clientsCounter" data-count="1600" data-duration="2">1600</span>
									<span class="text">Happy clients</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="number-item">
									<span class="number" id="projectCounter" data-count="3200" data-duration="2">3200</span>
									<span class="text">Completed projects</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="number-item">
									<span class="number" id="awardCounter" data-count="40" data-ration="1.5">40</span>
									<span class="text">Awards</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="number-item">
									<span class="number" id="coffeeCounter" data-count="20000" data-duration="3">20 000</span>
									<span class="text">Coffee drinks</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="container">
				<div class="heading">
					<div>About Us</div>
					<h1>Who we are</h1>
					<div class="divider">
						<span></span>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-item">
							<div class="circle pull-left">
								<i class="fa fa-clock-o"></i>
							</div>
							<h4>On time projects</h4>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-item delay2">
							<div class="circle pull-left">
								<i class="fa fa-rocket"></i>
							</div>
							<h4>Fully support</h4>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-item delay4">
							<div class="circle pull-left">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<h4>Professional experience</h4>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-item delay5">
							<div class="circle pull-left">
								<i class="fa fa-comments"></i>
							</div>
							<h4>Communicative team</h4>
							<p class="font-m">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="gray">
				<div class="container">
					<div class="heading">
						<h2>The team</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					<div class="row">
						<ul class="team " id="og-grid">
							<li class="col-md-3">
								<a href="" class="team-member" data-title="John Doe" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper nulla ut augue consectetur, at consequat enim malesuada." data-twitter="GraphBerry" data-facebook="facebook">
									<img src="img/Team/user_placeholder.png" alt="" class="img-responsive">
									<span class="name">John Doe</span>
									<span class="title">Ceo</span>
								</a>
							</li>
							<li class="col-md-3">
								<a href="sdd" class="team-member" data-title="Josh Thompson" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper nulla ut augue consectetur, at consequat enim malesuada." data-twitter="GraphBerry" data-facebook="facebook">
									<img src="img/Team/user_placeholder.png" alt="" class="img-responsive">
									<span class="name">Josh Thompson</span>
									<span class="title">Co-Founder</span>
								</a>
							</li>
							<li class="col-md-3">
								<a href="#" class="team-member" data-title="Mary Jane" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper nulla ut augue consectetur, at consequat enim malesuada." data-twitter="ceca" data-facebook="facebook">
									<img src="img/Team/user_placeholder.png" alt=""  class="img-responsive">
									<span class="name">Mary Jane</span>
									<span class="title">Creative director</span>
								</a>
							</li>
							<li class="col-md-3">
								<a href="#" class="team-member" data-title="Tiffany Klem" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper nulla ut augue consectetur, at consequat enim malesuada." data-twitter="ceca" data-facebook="facebook">
									<img src="img/Team/user_placeholder.png" alt=""  class="img-responsive">
									<span class="name">Tiffany Klem</span>
									<span class="title">Sale</span>
								</a>
							</li>
						</ul>						
					</div>
				</div>
			</div>
			<div class="branded-section skills">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<h2>Skills</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="chart">
									<div class="skill" data-percent="90">
										<span class="percent">90%</span>
									</div>
									<h3>HTML &amp; CSS</h3>
								</div>
							</div>
							<div class="col-sm-3 ">
								<div class="chart">
									<div class="skill" data-percent="96">
										<span class="percent">96%</span>
									</div>
									<h3>AI &amp; PS</h3>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="chart">
									<div class="skill" data-percent="85">
										<span class="percent">85%</span>
									</div>
									<h3>JS</h3>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="chart">
									<div class="skill" data-percent="94">
										<span class="percent">94%</span>
									</div>
									<h3>Photography</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="clients">
			<div class="container">
				<div class="heading">
					<div>Our clients</div>
					<h1>Who love to work with us</h1>
					<div class="divider">
						<span></span>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="row">
					<ul class="client-slider clearfix" id="clint-slider">
						<li><img src="img/clients/logo1.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo2.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo3.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo4.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo5.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo6.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo7.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo1.png" alt="" class="grayscale"></li>
						<li><img src="img/clients/logo2.png" alt="" class="grayscale"></li>
					</ul>
				</div>
				<ul class="client-nav">
					<li id="client-prev"></li>
					<li id="client-next"></li>
				</ul>
			</div>
			<div class="branded-section quote">
				<div class="masked">
					<div class="container">
						<div id="testimonials" class="bxslider clearfix">
							<blockquote>
								<p>Any man who can drive safely while kissing a pretty girl is simply not giving the kiss the attention it deserves.</p>
								<div class="divider">
									<span></span>
								</div>
								Albert Einstein
							</blockquote>
							<blockquote>
								<p>We keep moving forward, opening new doors, and doing new things, because we're curious and curiosity keeps leading us down new paths.</p>
								<div class="divider">
									<span></span>
								</div>
								Walt Disney
							</blockquote>
							<blockquote>
								<p>You know the golden rule, don’t you boy? Those who have the gold make the rules.</p>
								<div class="divider">
									<span></span>
								</div>
								Aladdin
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="gray">
			<div class="container">
				<div class="heading">
					<div>Contact Us</div>
					<h1>Where you can find us</h1>
					<div class="divider">
						<span></span>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="row">
					<div class="col-md-4 adress-element ">
						<i class="fa fa-home fa-2x"></i>
						<h3>Our adress</h3>
						<span class="font-l">Our adress 123, Serbia</span>
					</div>
					<div class="col-md-4 adress-element delay2">
						<i class="fa fa-comment fa-2x"></i>
						<h3>Our mail</h3>
						<span class="font-l">awesomemail@smakmail.com</span>
					</div>
					<div class="col-md-4 adress-element delay4">
						<i class="fa fa-phone fa-2x"></i>
						<h3>Our phone</h3>
						<span class="font-l">+012 555 555 5555</span>
					</div>
				</div>
			</div>
			<div class="branded-section contact-form">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<h1 class="light-font">Send us a message</h1>
							<p class="light-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et viverra ipsum.</p>
						</div>
						<form class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-4" style="position:relative">
									<input type="text" name="Name" data-new-placeholder="What is your name?" class="form-control label_better" placeholder="Name">
								</div>
								<div class="col-sm-4">
									<input type="text" name="Email" class="form-control label_better" placeholder="Email">
								</div>
								<div class="col-sm-4">
									<input type="text" name="Phone" class="form-control label_better" placeholder="Phone">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea class="form-control label_better" placeholder="Your comment.." rows="7"></textarea>
								</div>
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary">Send message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<p>&copy; Copyright <a href="http://graphberry.com?ref=smak">GraphBerry.com</a> 2014 All rights reserved</p>
				<ul class="social-list">
					<li class="facebook">
						<a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="twitter">
						<a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter"></i></a>
					</li>
					<li class="dribbble">
						<a href="http://goo.gl/k9zAy5">	<i class="fa fa-dribbble"></i></a>
					</li>
					<li class="youtube">
						<a href="#"><i class="fa fa-youtube"></i></a>
					</li>
				</ul>
				<a href="#home" class="square-l goup" style="position: relative">
					<span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
					</span>
				</a>
			</div>
		</footer>
	</div>
	<!-- Load all jsavascrip files -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.label_better.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.js"></script>
	<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
	<script type="text/javascript" src="js/jquery.inview.js"></script>
	<script type="text/javascript" src="js/countUp.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="js/grid.js"></script>
	<script>
	$(function() {
		Grid.init();
	});
	</script>
</body>
</html>