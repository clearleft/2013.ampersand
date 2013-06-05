<!DOCTYPE html>
<?php $thisPage="exhibitionpage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Exhibition</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<script type="text/javascript">
		var html = document.getElementsByTagName('html')[0];
        html.className = 'js wf-loading';
        setTimeout(function() {
            html.className = html.className.replace(' wf-loading', '');
        }, 3000)
        WebFontConfig = { fontdeck: { id: 29643 } };
        (function() {
            var wf = document.createElement('script');
            wf.src = '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();

	</script>
<link rel="stylesheet" href="css/styles.css">

</head>

<body id="wrapper" class="vevent home">

	<?php include("includes/header.php"); ?>


<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
    <section id="exhibition">
	   	<img src="images/exhibition.png" alt="Exhibition">
		<div class="exhibition-content" >
			<h1>Student Typeface Exhibition</h1>
    		<p>Ampersand 2013 is delighted to be announce the first international student type exhibition, showcasing the best of student type design from around the world. We&#8217;ll be presenting the diversity of emerging designers&#8217; work in both web and print specimens, along with a take-home catalogue recording the thriving landscape of design education today.</p>
		
		<section class="sponsorship-pack">

			<a href="Student_Exhibition.pdf">
				<div class="button">Student Exhibition Press Release<br/><small>(1.3Mb PDF)</small></div>
			</a>				
		</section>
		
			<p>For all enquiries please contact Ben Mitchell at <a href="mailto:ampersand.conference@gmail.com">ampersand.conference@gmail.com</a></p>
			</p>
    	</div>	<!-- END SPEAKER-BIO -->
	</section><!-- ########  END exhibition ###### -->
   
 
</div>
		
<?php include("includes/footer.php"); ?>

</body>
</html>
