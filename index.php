
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

<!-- Include MY JQuery Carousel Functions -->
<script src="js/carousel.js"></script>

<!-- Include MY Navigation Functions -->
<script src="js/navigationFunctions.js"></script>

<!-- Include MY Form Functions -->
<script src="js/form.js"></script>

<!-- Include MY Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69054407-1', 'auto');
  ga('send', 'pageview');

</script>

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
	<div class= "Section" id="aboutStyle">
		<h1 class="SectionHeader">About</h1>
		<div class="container">
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
	</div>
	<div id="resume" class="anchor"></div>
	<div class="Section" id= "resumeStyle">
	<h1 class="SectionHeader"> Resume </h1>
		<div class="leftContainer">
			<h2> Employment History </h2>
				<div class="job">
					<div class="jobImage">
						<img src = "img/logos/job/yesenergy.png">
					</div>
					<div class = "jobText">
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
					<div class="jobImage">
						<img src = "img/logos/job/channelnet-logo.png">
					</div>
					<div class = "jobText">
    					<h3 class="thinfont"> Project Manager, ChannelNet </h3>
						<h4 class="thinfont"> May, 2014 - May, 2015 </h4>
						<a href="http://www.channelnet.com/" target="_blank">ChannelNet Website</a>
					</div>
				</div>
				<div class="job">
					<div class="jobImage">
						
					</div>
					<div class = "jobText">
    					<h3 class="thinfont"> Digital Analyst, ChannelNet </h3>
						<h4 class="thinfont"> May, 2013 - May, 2014 </h4>
					</div>
				</div>
				<hr>
				<div class="job">
					<div class="jobImage">
						<img src = "img/logos/job/conor-oneills.png">
					</div>
					<div class = "jobText">
    					<h3 class="thinfont"> Server, Conor O'Neill's </h3>
						<h4 class="thinfont"> August, 2010 - August, 2013 </h4>
						<a href="http://www.conoroneills.com/" target="_blank">Conor O'Neill's Website</a>
					</div>
				</div>
				<hr>
				<div class="job">
					<div class="jobImage">
						<img src = "img/logos/job/lifetime-fitness.png">
					</div>
					<div class = "jobText">
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
		<div class="rightContainer" id="educationStyle">
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
	<div id="skills" class="anchor"> </div>
	<div class="Section" id= "skillsSection">	
		<h1 class="SectionHeader"> Skills </h1>
		<div class="leftContainer">
			<img src="img/WebDevelopment-transparent.png">
		</div>
		<div class="rightContainer">
			<a href="Forecast-Lookup"><img src="img/ReactJS.jpg"></a>
			<div id="ctabutton">
				<a href="Forecast-Lookup" target="_blank">View my React mini-project</a>
			</div>
		</div>
	</div>
	<div id="contact" class="anchor"></div>
	<div class="Section" id= "contactStyle">
		<h1 class="SectionHeader"> Contact </h1>
			<div id="contactSection" class="container">
				<div id="contactForm">
					<p>Name:</p><input type="text" required="true" name="name">
					<p>E-mail:</p> <input type="text" name="email">
					<p>Website:</p> <input type="text" name="website">
					<p>Message:</p> <input type="text" required="true" name="message">
					<input id="submit" type="submit" value="Send">
				</div>
			</div>
	</div>
<footer>
	<div class="leftContainer">
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
	<div class="rightContainer">
		<h3>
			Last Modified
		</h3>
		<p>
			<?php
				echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
			?>
		</p>
	</div>
</footer>
</BODY>
</HTML>