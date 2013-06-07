<!DOCTYPE html>
<?php $thisPage="locationpage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Location</title>
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

<body id="wrapper" class="vevent">

	<?php include("includes/header.php"); ?>

<!-- LOCATION -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	<article class="location">
		<header>
			<h1>Location</h1>
			<p>Brighton is one of the most vibrant, colourful and creative cities in Europe. Cosmopolitan, compact, energetic, unique, fun, lively, historic, young, exotic and free-spirited, it’s a city like no other. Why not spend the weekend here after the conference!</p>
		</header>	
		<div id="conf-location">
			<div class="location-a">
				<h2><em>MyFonts</em> Pre-Party</h2>
				<address>
					<span class="conf-location-name">Brighton Music Hall</span><br />
					127 Kings Road Arches, Brighton, <a href="https://www.google.com/maps/preview#!q=Brighton+Music+Hall%2C+BN1+2FN" title="See on Google Maps">BN1 2FN</a>
				</address>
			</div>
		
			<div class="location-b">
				<h2>Conference</h2>
				<address>
					<span class="conf-location-name">Brighton Dome Corn Exchange</span> <br />
					Church Street, Brighton, <a href="https://www.google.com/maps/preview#!q=Brighton+Dome+Corn+Exchange%2C+BN1+1UG" title="See on Google Maps">BN1 1UG</a>
				</address>
			</div>
		
			<div class="location-c">
				<h2><em>Typekit</em> After Party</h2>
				<address>
					<span class="conf-location-name">The Loft</span><br />
					10 Ship Street, Brighton, <a href="https://www.google.com/maps/preview#!q=The+Loft%2C+BN1+1AD" title="See on Google Maps">BN1 1AD</a>
				</address>
			</div>
		</div><!-- END #conf-location -->
			
			
		<div id="loc-container">
			<div class="map">
					<iframe src='http://a.tiles.mapbox.com/v3/mhjallan.map-dcw2v1k0.html#15/50.82346178463947/-0.14044046401978338'></iframe>
			</div>			
		</div><!-- END #conf-Location -->
		
		<div id="city-info">
			<h3>Getting Here</h3>
			<p>Brighton is only 30 minutes by train from London Gatwick airport. London itself is only 55 minutes by train.</p>
			<h3>Accommodation</h3>
			<p>Latest information is available from <a href="http://visitbrighton.com/accommodation">visitbrighton.com</a></p>
		</div><!-- END #city-info -->			

			
	</article>
	<div class="clearfix"></div>
</div>	
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
