<!DOCTYPE html>
<?php $thisPage="locationpage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Location</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<script type="text/javascript">
		WebFontConfig = { fontdeck: { id: '29643' } };

		(function() {
		  var wf = document.createElement('script');
		  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		  wf.type = 'text/javascript';
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
				<h2>Pre-Party <em><a href="sponsors">sponsorship available</a></em></h2>
				<address>
					<span class="conf-location-name">Venue tba</span>
				</address>
			</div>
		
			<div class="location-b">
				<h2 >Conference</h2>
				<address>
					<span class="conf-location-name">Brighton Dome Corn Exchange</span> <br />
					Church Street, Brighton, BN1 1UG, UK
				</address>
			</div>
		
			<div class="location-c">
				<h2 >After Party <em>hosted by Typekit</em></h2>
				<address>
					<span class="conf-location-name">The Loft</span><br />
					10 Ship Street, Brighton, BN1 1AD, UK
				</address>
			</div>
		</div><!-- END #conf-location -->
			
			
		<div id="loc-container">
			<div class="map">
					<iframe src='http://a.tiles.mapbox.com/v3/mhjallan.map-dcw2v1k0.html#16/50.82172289183965/-0.13665586310013397'></iframe>
			</div>			
		</div><!-- END #conf-Location -->
		
		<div id="city-info">
			<h3>Getting Here</h3>
			<p>The nearest airport is London Gatwick; Brighton is only 30 minutes away by train. London itself is only 55 minutes away on the train.</p>
			<h3>Accommodation</h3>
			<p>Latest information is available from <a href="http://visitbrighton.com/accommodation">visitbrighton.com</a></p>
		</div><!-- END #city-info -->			

			
	</article>
	<div class="clearfix"></div>
</div>	
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
