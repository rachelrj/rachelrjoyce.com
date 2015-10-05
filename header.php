        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
		<header>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--
This php function assigns the class 'navclass' to the page/section the user is currently on.
This class indicates to the user which page/section she is currently on.
-->
       		<nav>
       		<a href = "javascript:scrollToTop();" id = 'logo'>

       		</a>
               	<a 
					href = "#about"><p
					<?php
					if ($_SERVER['PHP_SELF']=='#about')
							echo " class=\"navclass\""
					?>
					>About</p></a>
               	<a 
               		href = "#resume"><p
               		<?php
					if ($_SERVER['PHP_SELF']=='#resume')
							echo " class=\"navclass\""
					?>
					>Resume</p></a>
               	<a 
              		href = "#contact"><p
              		<?php
					if ($_SERVER['PHP_SELF']=='#contact')
							echo " class=\"navclass\""
					?>
					>Contact</p></a>
          	</nav>

<!--
					Three Bar below
-->

					<a id="threebar" href = "javascript:toggleText();">
					<div class= "bar">
					</div>
					<div class= "bar">
					</div>
					<div class= "bar">
					</div>
					</a>


<!--
					Mobile Nav
-->

					<div class= "mobilenav">
					<a 
					href = "#about"><p
					<?php
					if ($_SERVER['PHP_SELF']=='#about')
							echo " class=\"selectedmobilenav\""
					?>
					>About</p></a>
               		<a 
               		href = "#resume"><p
               		<?php
					if ($_SERVER['PHP_SELF']=='#resume')
							echo " class=\"selectedmobilenav\""
					?>
					>Resume</p></a>
               		<a 
              		href = "#contact"><p
              		<?php
					if ($_SERVER['PHP_SELF']=='#contact')
							echo " class=\"selectedmobilenav\""
					?>
					>Contact</p></a>
					</div>

<script language="javascript">
function scrollToTop() {
	$( "body" ).scrollTop( 0 );
}
function toggleText() {
$('.mobilenav').slideToggle("slow", function(){
       });    
}
</script>
<script language="javascript">
//script to remove mobile nav on browser resize
$( window ).resize(function() {
  $( ".mobilenav" ).hide();
});
</script>
<script language="javascript">
$(document).bind('click', function(e) {
  if(!$(e.target).is('#threebar') && !$(e.target).is('.bar')) {
    $( ".mobilenav" ).hide();
  }
});
</script>
</header>