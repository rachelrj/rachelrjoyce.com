
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>HOME | Rachel R Joyce</TITLE>
<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="Author" content="Rachel R Joyce">
<meta http-equiv="Content-Language" content="en-us">
<META NAME="GOOGLEBOT" CONTENT="INDEX, FOLLOW">
<meta name="robots" content="all, index, follow">
<meta name="rating" content="general">
<meta name="viewport" content="initial-scale=1">

<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Touchy JS minified file for swipe event manipulation -->
<script src="js/touchy.js"></script>

<!-- Include MY JQuery Carousel -->
<script src="js/carousel.js"></script>

<!-- Include MY Scroll Function -->
<script src="js/navigationFunctions.js"></script>

<!-- Include MY Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</HEAD>

<BODY>	  
	<?php
		include 'header.php';
	?>
	<div id="home">
		<div id= "hero">
			<div id="carousel">
				<div id="arrow-left-container">
			        <div id="arrow-left"></div>
			    </div>
			    <div id="arrow-right-container">
			        <div id="arrow-right"></div>
			    </div>
			    <div id="slides"> 
			        <ul id="carouselList">
			            <li class="slide1"></li>
			            <li class="slide2"></li>
			            <li class="slide3"></li>
			            <li class="slide4"></li>
			        </ul>
			    </div>
		</div>
	</div>
	<div id="about" class="anchor"></div>
	<div id= "aboutStyle">
		<h1 class="SectionHeader">About</h1>
		<p>
			Thank you for visiting my personal site and for taking a few minutes to get to know me. 
		</p>
		<p>
			I am a young software developer in Boulder, Colorado. 
			I recently moved here from Ann Arbor, Michigan and am currently reveling in the spectacular views and amazing weather!
			My interests as a web developer lie in both front end and full stack; my expertise is in newer front end technologies.
			I am passionate about solving problems and discussing and improving code design and readability.
			I am also an advocate of agile methodologies; you can see my Scrum Alliance profile 
			<a href="http://members.scrumalliance.org/profiles/361551-rachel-joyce" target="_blank">here</a>.
		</p>
		<p>
			I am always looking to discuss common interests or opportunities. Fill out the form below to send me an email
			so that we can connect. Thanks again for visiting.
		</p>

	</div>
	<div id="resume" class="anchor"></div>
	<div id= "resumeStyle">
	<h1 class="SectionHeader"> Resume </h1>
		<div id= "employment">
			<h2> Employment History </h2>
				<div class="job">
					<div class="image">
						<img src = "img/logos/job/yesenergy.png">
					</div>
					<div class = "text">
    					<h3 class="thinfont"> Web Developer, Yes Energy </h3>
						<h4 class="thinfont"> May, 2015 - Present </h4>
						<a href="http://www.yesenergy.com/" target="_blank">Yes Energy Website</a>
					</div>
				</div>
				<div id="downloadbutton">
					<a href="pdf/YesEnergy-samplework.pdf" download="RachelsSampleWork">View My Sample Work</a>
				</div>
				<hr>
				<div class="job">
					<div class="image">
						<img src = "img/logos/job/channelnet-logo.png">
					</div>
					<div class = "text">
    					<h3 class="thinfont"> Project Manager, ChannelNet </h3>
						<h4 class="thinfont"> May, 2014 - May, 2015 </h4>
						<a href="http://www.channelnet.com/" target="_blank">ChannelNet Website</a>
					</div>
				</div>
				<div class="job">
					<div class="image">
						
					</div>
					<div class = "text">
    					<h3 class="thinfont"> Digital Analyst, ChannelNet </h3>
						<h4 class="thinfont"> May, 2013 - May, 2014 </h4>
					</div>
				</div>
				<hr>
				<div class="job">
					<div class="image">
						<img src = "img/logos/job/conor-oneills.png">
					</div>
					<div class = "text">
    					<h3 class="thinfont"> Server, Conor O'Neill's </h3>
						<h4 class="thinfont"> August, 2010 - August, 2013 </h4>
						<a href="http://www.conoroneills.com/" target="_blank">Conor O'Neill's Website</a>
					</div>
				</div>
				<hr>
				<div class="job">
					<div class="image">
						<img src = "img/logos/job/lifetime-fitness.png">
					</div>
					<div class = "text">
    					<h3 class="thinfont"> Swim Instructor, Life Time </h3>
						<h4 class="thinfont"> January, 2010 - August, 2010 </h4>
						<a href="https://www.lifetimefitness.com/en.html" target="_blank">Life Time Fitness's Website</a>
					</div>
				</div>
				<hr>
				<div id="downloadbutton">
				<a href="pdf/RachelJoyce-resume.pdf" download="RachelsResume">Download My Resume</a>
				</div>
		</div>
		<div id ="ed-skills">
			<div id="education">
				<h2>Education</h2>
					<img src="img/cu.png">
					<h3 class="thinfont">University of Colorado, Boulder</h3>
					<h4 class="thinfont">Master of Business Administration</h4>
					<h4 class="thinfont">Expected Graduation: 2017</h4>
					<hr>
					<img src="img/universityofmichigan.png">
					<h3 class="thinfont">University of Michigan, Ann Arbor</h3>
					<h4 class="thinfont">Bachelor of Arts in Informatics</h4>
					<h4 class="thinfont">Minor: Computer Science</h4>
			</div>
		</div>
	</div>
	<div id="contact" class="anchor"></div>
	<div id= "contactStyle">
		<div id="form">
			<h1 class="SectionHeaderLeft"> Contact </h1>
			<div id="formDiv">
				<form method="post" action="form.php">
					<p>Name:</p><input type="text" name="name">
					<p>E-mail:</p> <input type="text" name="email">
					<p>Website:</p> <input type="text" name="website">
					<p>Message:</p> <input type="text" name="message">
					<input type="submit" value="Send">
				</form>
			</div>
		</div>
		<div id="skills">
			<h1 class="SectionHeaderRight"> Skills </h1>
			<div class="skillSection">
			<img src="img/WebDevelopment-transparent.png">
			</div>
			<div class="skillSection">
			<a href="Forecast-Lookup"><img src="img/ReactJS.jpg"></a>
			<div id="ctabutton">
				<a href="Forecast-Lookup" target="_blank">View my React mini-project</a>
			</div>
			</div>
		</div>
	</div>
<footer>
	<div class="floatleft">
		<h3>
			Connect
		</h3>
		<a href="http://www.linkedin.com/pub/rachel-joyce/64/411/208" target="_blank">
			<img src="img/icons/64-linkedin.png">
		</a>
		<a href="http://www.facebook.com/racheljoyce29/" target="_blank">
			<img src="img/icons/64-facebook.png">
		</a>
		<a href="http://www.twitter.com/rachelrjoyce" target="_blank">
			<img src="img/icons/64-twitter.png">
		</a>
	</div>
	<div class="floatright">
		<h3>
			Last Modified
		</h3>
		<p>
			<?php
				// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
				echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
			?>
		</p>
	</div>
</footer>
</BODY>
</HTML>