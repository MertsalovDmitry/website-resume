<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
	<meta name="description" content="Website"/>
	<meta name="keywords" content=""/>
	<meta name="google" content="notranslate"/>
	<title>.Net/Frontend Developer</title>
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
	<!-- PRELOADER -->
	<div class="preloader-background valign-wrapper">
		<div class="preloader-wrapper big active ">
			<div class="spinner-layer spinner-blue-only ">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- HEADER -->
	<header id="top" class="scrollspy">
		<!-- NAVIGATION -->
		<nav class="blue darken-4" role="navigation">
			<div class="container">
				<div class="nav-wrapper">			
					<a href="#" data-activates="nav-mobile" class="button-collapse hide-on-med-and-up">
						<i class="mdi-navigation-menu">
							<i class="large material-icons">view_headline</i>
						</i>
					</a>
					<ul class="hide-on-small-only nav-center">
						<li><a href="#aboutme">ABOUT</a></li>
						<li><a href="#skills">SKILLS</a></li>
						<li><a href="#experience">EXPERIENCE</a></li>
						<li><a href="#contacts">CONTACTS</a></li>
					</ul>
				
					<ul class="side-nav" id="nav-mobile">
						<li>
							<div class="userView">
								<div class="background">
									<img src="img/side-nav-background.jpg">
								</div>
								<a href="#!user">
									<img class="circle" src="img/main_photo.jpg" alt="photo">
								</a>
								<a href="#!name">
									<span class="white-text name">Mertsalov Dmitry</span>
								</a>
								<a href="#!email">
									<span class="white-text email">.Net/Frontend Developer</span>
								</a>
							</div>
						</li>
						<li>
							<a href="#aboutme" class="blue-text text-darken-4 waves-effect">
								<i class="material-icons blue-text text-darken-4">info_outline</i>ABOUT
							</a>
						</li>
						<li>
							<a href="#skills" class="blue-text text-darken-4 waves-effect">
								<i class="material-icons blue-text text-darken-4">star</i>SKILLS
							</a>
						</li>
						<li>
							<a href="#experience" class="blue-text text-darken-4 waves-effect">
								<i class="material-icons blue-text text-darken-4">work</i>EXPERIENCE
							</a>
						</li>
						<li>
							<a href="#contacts" class="blue-text text-darken-4 waves-effect">
								<i class="material-icons blue-text text-darken-4">phone</i>CONTACTS
							</a>
						</li>
					</ul>				
				</div>
			</div>
		</nav>
		<!-- PARALLAX MAIN -->
		<div class="parallax-container wrapper parallax-big">
			<div class="valign-wrapper main-page white-text">
				<div class="container">					
					<div class="center-align">
						<img src="img/main_photo.jpg" alt="photo" class="circle responsive-img">
					</div>
					<h1 class="center-align">Mertsalov Dmitry</h1>
					<p class="center-align head-title">.NET / Front-End developer</p>	
				</div>
				<div class="parallax">
					<img src="img/parallax-big.jpg" alt="parallax-big">
				</div>
			</div>
		</div>
	</header>
	<!-- END OF HEADER -->

	<!-- ABOUT ME -->
	<div id="aboutme" class="section scrollspy aboutme blue darken-4 white-text valign-wrapper">
		<div class="container">
			<h3 class="center-align top-margin">ABOUT</h3>
			<div class="divider"></div>		
			<div class="center-align">
				<div class="top-margin">	
					<p> 
						Hi, my name is Dmitry Mertsalov.</br>
						I am a beginner web developer.</br>
						I<span class="like"><i class="fa fa-heart" aria-hidden="true"></i></span>.NET and Front-End.</br>
						Favorite technologies is ASP MVC & Angular.
					</p>					
				</div>
				<div class="owl-carousel top-margin">
					<div class="center item">
						<p class="">Location</p>
						<i class="fa fa-map-marker my-icon" aria-hidden="true"></i>
						<p class="">UKRAINE</p>	
					</div>
					<div class="center item">
						<p>Age</p>
						<i class="fa fa-battery-full my-icon" aria-hidden="true"></i>
						<p><?php include "php/functions.php"; echo getAge(); ?></p>
						</div>
					<div class="center item">									
						<p class="">Status</p>
						<i class="fa fa-star-o my-icon" aria-hidden="true"></i>
						<p class="">JUNIOR</p>												
					</div>
					<div class="center item">
						<p>Target</p>
						<i class="fa fa-bullseye my-icon" aria-hidden="true"></i>
						<p>SENIOR DEVELOPER</p>
					</div>
					<div class="center item">
						<p>Looking For</p>
						<i class="fa fa-search my-icon" aria-hidden="true"></i>
						<p>PROGRESS</p>
					</div>
					<div class="center item">
						<p>Relocation</p>
						<i class="fa fa-plane my-icon" aria-hidden="true"></i>
						<p>POSSIBLY</p>
					</div>
					<div class="center item">
						<p>Preference</p>
						<i class="fa fa-wifi my-icon" aria-hidden="true"></i>
						<p>REMOTE</p>
					</div>
				</div>
				<div>
					<a download href="files/resume.pdf" class="waves-effect waves-light btn-large amber darken-2 top-margin bottom-margin"><i class="fa fa-download left" aria-hidden="true"></i>DOWNLOAD RESUME</a>
				</div>	
			</div>			
		</div>
	</div>
	<!-- END OF ABOUT -->

	<!-- SKILLS -->
	<div id="skills" class="section scrollspy skills grey lighten-5">
		<div class="container">
			<h3 class="center-align blue-text text-darken-4 top-margin">SKILLS</h3>
			<div class="divider blue darken-4"></div>
			<div class="row">
				<div class="col s12 m12 l6 xl4 hoverable">
					<h4 class="center blue-text text-darken-4">.NET</h4>
					<div class="skillbar clearfix " data-percent="60%">
						<div class="skillbar-title skill-cs"><span>C#</span></div>
						<div class="skillbar-bar skill-cs"></div>
						<div class="skill-bar-percent blue-text text-darken-4">60%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="50%">
						<div class="skillbar-title skill-wforms"><span>Win Forms</span></div>
						<div class="skillbar-bar skill-wforms"></div>
						<div class="skill-bar-percent blue-text text-darken-4">50%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="25%">
						<div class="skillbar-title skill-aspmvc"><span>ASP MVC</span></div>
						<div class="skillbar-bar skill-aspmvc"></div>
						<div class="skill-bar-percent blue-text text-darken-4">25%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="25%">
						<div class="skillbar-title skill-aspwebapi"><span>Web API</span></div>
						<div class="skillbar-bar skill-aspwebapi"></div>
						<div class="skill-bar-percent blue-text text-darken-4">25%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="30%">
						<div class="skillbar-title skill-mssql"><span>MS SQL</span></div>
						<div class="skillbar-bar skill-mssql"></div>
						<div class="skill-bar-percent blue-text text-darken-4">30%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix" data-percent="40%">
						<div class="skillbar-title skill-ef"><span>EF</span></div>
						<div class="skillbar-bar skill-ef"></div>
						<div class="skill-bar-percent blue-text text-darken-4">40%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="40%">
						<div class="skillbar-title skill-linq"><span>LINQ</span></div>
						<div class="skillbar-bar skill-linq"></div>
						<div class="skill-bar-percent blue-text text-darken-4">40%</div>
					</div> <!-- End Skill Bar -->
				</div>

				<div class="col s12 m12 l6 xl4 hoverable">
					<h4 class="center blue-text text-darken-4">Front-End</h4>
					<div class="skillbar clearfix " data-percent="75%">
						<div class="skillbar-title skill-html"><span>HTML5</span></div>
						<div class="skillbar-bar skill-html"></div>
						<div class="skill-bar-percent">75%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="75%">
						<div class="skillbar-title skill-css"><span>CSS3</span></div>
						<div class="skillbar-bar skill-css"></div>
						<div class="skill-bar-percent">75%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="50%">
						<div class="skillbar-title skill-sass"><span>SASS</span></div>
						<div class="skillbar-bar skill-sass"></div>
						<div class="skill-bar-percent">50%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="30%">
						<div class="skillbar-title skill-js"><span>JS</span></div>
						<div class="skillbar-bar skill-js"></div>
						<div class="skill-bar-percent">30%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="30%">
						<div class="skillbar-title skill-jquery"><span>JQuery</span></div>
						<div class="skillbar-bar skill-jquery"></div>
						<div class="skill-bar-percent">30%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="25%">
						<div class="skillbar-title skill-angular"><span>Angular 2</span></div>
						<div class="skillbar-bar skill-angular"></div>
						<div class="skill-bar-percent">25%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="5%">
						<div class="skillbar-title skill-react"><span>React JS</span></div>
						<div class="skillbar-bar skill-react"></div>
						<div class="skill-bar-percent">5%</div>
					</div> <!-- End Skill Bar -->
				</div>

				<div class="col s12 m12 l12 xl4 hoverable">
					<h4 class="center blue-text text-darken-4">Other</h4>
					<div class="skillbar clearfix " data-percent="50%">
						<div class="skillbar-title skill-oop"><span>OOP</span></div>
						<div class="skillbar-bar skill-oop"></div>
						<div class="skill-bar-percent">50%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="40%">
						<div class="skillbar-title skill-patterns"><span>Patterns</span></div>
						<div class="skillbar-bar skill-patterns"></div>
						<div class="skill-bar-percent">40%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="45%">
						<div class="skillbar-title skill-english"><span>English</span></div>
						<div class="skillbar-bar skill-english"></div>
						<div class="skill-bar-percent">INTERMEDIATE</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="50%">
						<div class="skillbar-title skill-git"><span>GIT</span></div>
						<div class="skillbar-bar skill-git"></div>
						<div class="skill-bar-percent">50%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="65%">
						<div class="skillbar-title skill-gulp"><span>Gulp</span></div>
						<div class="skillbar-bar skill-gulp"></div>
						<div class="skill-bar-percent">65%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="10%">
						<div class="skillbar-title skill-webpack"><span>Webpack</span></div>
						<div class="skillbar-bar skill-webpack"></div>
						<div class="skill-bar-percent">10%</div>
					</div> <!-- End Skill Bar -->

					<div class="skillbar clearfix " data-percent="10%">
						<div class="skillbar-title skill-mongodb"><span>MongoDB</span></div>
						<div class="skillbar-bar skill-mongodb"></div>
						<div class="skill-bar-percent">10%</div>
					</div> <!-- End Skill Bar -->
				</div>
			</div>
		</div>
	</div>	
	<!-- END OF SKILLS -->

	<!-- EXPERIENCE / EDUCATION -->
	<div id="experience" class="section scrollspy experience blue darken-4">
		<div class="container">
			<h3 class="center-align white-text top-margin">EXPERIENCE / EDUCATION</h3>
			<div class="divider"></div>

			<ul class="tabs center">
				<li class="tab col s3">
					<a href="#test-swipe-1" class="active blue-text text-darken-4">
						<i class="fa fa-briefcase" aria-hidden="true"></i> 
						 Vistplus
					</a>
				</li>
				<li class="tab col s3">
					<a class="blue-text text-darken-4" href="#test-swipe-2">
						<i class="fa fa-briefcase" aria-hidden="true"></i> AMI
					</a>
				</li>
				<li class="tab col s3">
					<a href="#test-swipe-3" class="blue-text text-darken-4">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						 Education
					</a>
				</li>
			</ul>
			<div id="test-swipe-1" class="col s12 blue darken-4 top-margin">
				<div class="row">
					<div class="center">
						<h4 class="white-text">Repair engineer</h4>
						<h5 class="white-text">April 2009 - Present</h5>		
						<ul class="collection with-header blue-text text-darken-4 top-margin">
							<li class="collection-header"><h5>Functions:</h5></li>
							<li class="collection-item">Management of the technical support department</li>
							<li class="collection-item">Installation and configuration OS Windows </li>
							<li class="collection-item">Configuring the backup of databases and documents</li>
							<li class="collection-item">Assembling, installation and packaging of server enclosures</li>
							<li class="collection-item">Preventive maintenance, repair notebook and PCs</li>
							<li class="collection-item">Repair laser printers</li>
						</ul>						
					</div>
				</div>
			</div>
			<div id="test-swipe-2" class="col s12 blue darken-4 top-margin">
				<div class="row">
					<div class="center">
						<h4 class="white-text">PC assembler</h4>			
						<h5 class="white-text">June 2007 - October 2008</h5>
						<ul class="collection with-header blue-text text-darken-4 top-margin">
							<li class="collection-header"><h5>Functions:</h5></li>
							<li class="collection-item">Assembly PCs</li>
						</ul>		
					</div>	
				</div>
			</div>
			<div id="test-swipe-3" class="col s12 blue darken-4 btn-resume top-margin">
				<div class="row">
					<div class="center">
						<h4 class="white-text">Donetsk Polytechnic School</h4>
						<h5 class="white-text">September 2003 - June 2007</h5>	
						<ul class="collection with-header blue-text text-darken-4 top-margin">
							<li class="collection-header"><h5>Specialization:</h5></li>
							<li class="collection-item">Service of computer systems & networks</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF EXPERIENCE / EDUCATION -->

	<!-- PARALLAX SMALL -->
	<div class="parallax-container wrapper parallax-small">
		<div class="wrapper">
			<div class="parallax">
				<img src="img/parallax-small.jpg" class="responsive-img" alt="parallax-small">
			</div>
		</div>
	</div>
	<!-- END OF PARALLAX SMALL -->

	<!-- CONTACTS -->	
	<div id="contacts" class="section scrollspy  blue darken-4">
		<div class="container white-text">
			<h3 class="center-align top-margin">CONTACTS</h3>
			<p class="center-align">Let's Keep In Touch!</p>
			<div class="divider"></div>
			<div class="row">
				<!-- SEND FORM -->	
				<form id="send_form" class="col s12 m6 l7 white-text top-margin" role="form" method="post" >
					<div class="row">
						<div class="input-field col s12 m12 l12 xl6">
							<i class="material-icons prefix">perm_identity</i>
							<input name="fname" id="fname" type="text" class="validate" autocomplete="off"  required="" aria-required="true">
							<label class="white-text" for="fname">Name</label>
						</div>
						<div class="input-field col s12 m12 l12 xl6">
							<i class="material-icons prefix">email</i>
							<input id="email" name="email" type="email" class="validate" autocomplete="off" required="" aria-required="true"">
							<label class="white-text"for="email">Email</label>
						</div>      			     				
						<div class="input-field col m12 s12">
							<i class="material-icons prefix">label_outline</i>
							<input id="subject" name="subject" type="text" class="validate" autocomplete="off" required="" aria-required="true"">
							<label class="white-text" for="subject">Subject</label>
						</div>      			     				
						<div class="input-field col m12 s12">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="message" name="message" class="materialize-textarea validate" autocomplete="off" required="" aria-required="true"></textarea>
							<label class="white-text" for="message">Message</label>
						</div>     				     				
						<div class="col offset-s6 s6">
							<button id="btn_send" class="btn waves-effect waves-light btn-send" type="submit">	Send
								<i class="right fa fa-paper-plane" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</form>
				<!-- END OF SEND FORM -->	

				<div class="col s12 m6 l5 center top-margin">
					<div class="adress">
						<p>
							<i class="small fa fa-map-marker" aria-hidden="true"> Ukraine, Donetsk</i>
						</p>
					</div>					
					<div class="adress">
						<p>
							<i class="small fa fa-mobile" aria-hidden="true"> +ХХ(ХХХ)ХХХХХХХ</i>
						</p>
					</div>
					<div class="skype">
						<p><i class="small fa fa-skype" aria-hidden="true"> rdmitry16</i></p>
					</div>
					<div class="social">					
						<ul>
							<li>
								<a class="white-text" href="#" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</li>
							<li>
								<a class="white-text" href="#" target="_blank">
									<i class="fa fa-facebook-square""></i>
								</a>
							</li>
							<li>
								<a class="white-text" href="#" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<!-- END OF CONTACTS -->

	<!-- Footer -->
	<footer class="page-footer blue darken-4">
		<div class="footer-copyright">
			<div class="container ">
				<div class="divider"></div>
				<div class="center">
					<p>
						<a href="#top"><i class="fa fa-arrow-circle-o-up fa-2x white-text" aria-hidden="true"></i></a>
					</p>
				</div>
				<div class="center">
					<p>© <?php echo date(Y) ?> Mertsalov Dmitry</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- END OF FOOTER -->

	<!-- SCRIPTS -->
	<script src="js/script.min.js"></script>
</body>
</html>