<?php $thisPage     = 'locationpage'; ?>
<?php $pageTitle    = 'Location'; ?>

<?php include("includes/pageHeader.php"); ?>

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
					<span class="conf-location-name">The Terraces</span><br />
					Madeira Drive, Brighton, <a href="https://www.google.com/maps/preview#!q=The+Terraces%2C+BN2+1TB" title="See on Google Maps">BN2 1TB</a>
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
