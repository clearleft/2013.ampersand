<!DOCTYPE html>
<?php $thisPage="sponsorspage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Sponsorship</title>
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

<body id="wrapper" class="vevent sponsors-page">

	<?php include("includes/header.php"); ?>

<!-- sponsors-page -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	
	<article class="section sponsors-page clearfix">
		<h1>Sponsors</h1>
		<p class="loud"><span>Get your message</span> to a creative, knowledgeable, and tech-savvy audience including everyone from creative directors and heads of design, 
		to freelance web designers, front-end developers, illustrators and type designers.</p>
		
		<section class="sponsorship-pack">

			<a href="Ampersand_Sponsor_Pack_2013.pdf">
				<div class="button">Sponsors Information Pack <br/><small>(1.2Mb PDF)</small></div>
			</a>				
			
			<br/>
			<span>or </span><a href="mailto:ampersand@clearleft.com">just contact us.</a> 
		</section>
		
		<p><span>Ampersand</span> has plenty of sponsorship options and opportunities providing you the flexibility to showcase your services and demonstrate your commitment to the web design and typography community in a way that best fits your needs.</p>
		<p>We’ve also introduced a special low cost grassroots sponsorship option especially for individuals or very small up-and-coming businesses.</p>
		
		
	</article>
		
</div><!-- END MAIN CONTENT -->	
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
