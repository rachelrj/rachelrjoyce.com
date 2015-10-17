        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
		<header>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--
This php function assigns the class 'navclass' to the page/section the user is currently on.
-->
       		<nav>
	       		<a href="" id = 'logo'>

	       		</a>
          	</nav>

<!--
					Three Bar (hamburger icon) for mobile devices
-->

					<a id="threebar">
					<span id="bars"></span>
					</a>


<!--
					Navigation
-->

					<div class= "mobilenav">
					<a class= "navigationLink"
					href = "#about"><p
					<?php
					if ($_SERVER['PHP_SELF']=='#about')
							echo " id=\"#selectedNavigationID\""
					?>
					>About</p></a>
               		<a class= "navigationLink"
               		href = "#resume"><p
               		<?php
					if ($_SERVER['PHP_SELF']=='#resume')
							echo " id=\"#selectedNavigationID\""
					?>
					>Resume</p></a>
               		<a class= "navigationLink"
              		href = "#contact"><p
              		<?php
					if ($_SERVER['PHP_SELF']=='#contact')
							echo " id=\"#selectedNavigationID\""
					?>
					>Contact</p></a>
					</div>
</header>