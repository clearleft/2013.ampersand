<!DOCTYPE html>
<?php $thisPage="speakerspage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Speakers</title>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
	  var top = $('.speaker-nav').offset().top - parseFloat($('.speaker-nav').css('marginTop').replace(/auto/, 0));
	  $(window).scroll(function (event) {
	    // what the y position of the scroll is
	    var y = $(this).scrollTop();

	    // whether that's below the form
	    if (y >= top) {
	      // if so, ad the fixed class
	      $('.speaker-nav').addClass('fixed');
	    } else {
	      // otherwise remove it
	      $('.speaker-nav').removeClass('fixed');
	    }
	  });

	  $('a[href^="#"]').bind('click.smoothscroll',function (e) {
	      e.preventDefault();
	      var target = this.hash;
	          $target = $(target);
	      $('html, body').stop().animate({
	          'scrollTop': $target.offset().top
	      }, 500, 'swing', function () {
	          window.location.hash = target;
	      });
	  });
	});


</script>

</head>

<body id="wrapper" class="vevent home">

	<?php include("includes/header.php"); ?>


<div class="main-content">

	<?php include("includes/nav.php"); ?>

    <section class="speakers-container" id="erik-spiekermann">

   	<div class="speaker-copy" >
    		<h1>Keynote</h1>
    		<p></p>

   		<h2>Erik Spiekermann</h2>
    		<p class="speaker-bio">Erik Spiekermann is information architect, type designer and author of books and articles on type and typography. Two of his typefaces, FF Meta and ITC Officina, are considered to be modern classics.  In 1979 he founded MetaDesign and in 1989 FontShop. Today he is managing partner and creative director of Edenspiekermann. He is also Honorary Royal Designer for Industry in Britain.</p>
    	</div>	<!-- END SPEAKER-BIO -->

   	<div class="speaker-more">
    		    		<ul>
    			<li><a href="http://www.twitter.com/spiekermann">@espiekermann</a></li>
    			<li><a href="http://spiekermann.com/">spiekermann.com</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPIEKERMANN ###### -->

   <section class="speakers-container" id="mark-boulton">

  		<div class="speaker-copy" >
   		<h1>Typography in Responsive Design</h1>
   		<p>Drawing on all the tools we currently have at our disposal, Mark will take you through the decisions you can make to make your typography as responsive as your layout.</p>

  		<h2>Mark Boulton</h2>
   		<p class="speaker-bio">Mark Boulton is a web designer and author, and member of the ISTD. He is the founder of Mark Boulton Design, and co-founder of indie publisher Five Simple Steps. Sometimes outspoken, always passionate, Mark is obsessed with applying the fundamentals of good typographic design on the web. Mark lives in South Wales with his wife and daughter, a small collection of neglected bonsai and a guitar he wish he owned when he was 18.</p>
   	</div>	<!-- END SPEAKER-BIO -->

  		<div class="speaker-more">
  	 		  	 		<ul>
  	 			<li><a href="http://www.twitter.com/markboulton">@markboulton</a></li>
  	 			<li><a href="http://www.markboulton.co.uk">www.markboulton.co.uk</a></li>
  	 		</ul>
  	 	</div><!-- END MORE-BIO -->
  </section><!-- ########  END SPEAKER ###### -->

  <section class="speakers-container" id="gerry-leonidas">

 	<div class="speaker-copy" >
  		<h1>The Newest New Typography</h1>
  		<p></p>

 		<h2>Gerry Leonidas</h2>
 		<p>It takes four seconds to make up your mind about a typeface, and about eight minutes to explain why, in detail. It takes about ten years, give or take a couple, to figure out why all the print typographers moan that there's more to Good Typography than a nice typeface; they'd say it would take as much to explain the whole thing. Gerry will attempt to do it in 44 minutes, leaving just enough time for a joke about old typographers.</p>
  		<p class="speaker-bio">Gerry Leonidas is a Senior Lecturer in Typography at the University of Reading. He teaches, supervises, and lectures on typography, typeface design, and typographic education. The rest of his time is taken with enterprise and consultancy projects, and a fair amount of pushing paper. He is mostly associated with the MA Typeface Design course, for which he is the Programme Director.</p>
  	</div>	<!-- END SPEAKER-BIO -->

 	<div class="speaker-more">
  		  		<ul>
  			<li><a href="http://www.twitter.com/@gerryleonidas">@gerryleonidas</a></li>
			<li><a href="http://www.twitter.com/@typefacedesign">@typefacedesign</a></li>
  			<li><a href="http://leonidas.org/">leonidas.org/</a></li>
  		</ul>
  	</div><!-- END MORE-BIO -->
 </section><!-- ########  END SPEAKER ###### -->


	 <section class="speakers-container"  id="ben-terrett">

 		<div class="speaker-copy" >
	 		<h1>Designing GOV.UK</h1>
	 		<p></p>

			<h2>Ben Terrett</h2>
	 		<p class="speaker-bio">Ben is Head of Design at the Government Digital Service, in the Cabinet Office for the UK Government. Before that he was Design Director at Wieden & Kennedy London. In 2010 Ben won the Graphics category in the Design Museum&#8217;s Designs Of The Year Awards. Ben has spoken about design on Radio 4&#8217;s Today programme and has been a D&amp;AD judge several times.</p>
	 	</div>	<!-- END SPEAKER-BIO -->

 		<div class="speaker-more">
 	 		 	 		<ul>
 	 			<li><a href="http://www.twitter.com/@ben_terret">@ben_terret</a></li>
 	 			<li><a href="http://www.benterrett.com">www.benterrett.com</a></li>
				<li><a href="http://noisydecentgraphics.typepad.com/">noisydecentgraphics.typepad.com</a></li>
 	 		</ul>
 	 	</div><!-- END MORE-BIO -->
	</section><!-- ########  END SPEAKER ###### -->

    <section class="speakers-container" id="kutlu-canlioglu">

   	<div class="speaker-copy" >
    		<h1>Designing BBC Worldwide</h1>
    		<p></p>

   		<h2>Kutlu Çanlıoğlu</h2>
    		<p class="speaker-bio">Kutlu is Creative Director of BBC iPlayer where he leads the user experience and design team. Before leading the iPlayer team, Kutlu was the Creative Director for the BBC&#8217;s Global Experience Language and responsible for championing the role of craftsmanship around typography. </p>
    	</div>	<!-- END SPEAKER-BIO -->

   	<div class="speaker-more">
    		    		<ul>
    			<li><a href="http://www.twitter.com/@kutluc">@kutluc</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPEAKER ###### -->


    <section class="speakers-container" id="nina-stoessinger">

   	<div class="speaker-copy" >
    		<h1>Being Ernestine</h1>
    		<p></p>

   		<h2>Nina Stössinger</h2>
    		<p class="speaker-bio">Nina is a self-employed designer based in Basel, where she works in graphic and web design, typography and book design. Nina also teaches screen typography at FH Dresden and is a contributor to We Love Typography. Her nights and weekends are often spent working on her own type projects, resulting in the release of her first commercial typeface in 2011.</p>
    	</div>	<!-- END SPEAKER-BIO -->

   	<div class="speaker-more">
    		    		<ul>
    			<li><a href="http://www.twitter.com/@ninastoessinger">@ninastoessinger</a></li>
    			<li><a href="http://ninastoessinger.com">ninastoessinger.com</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPEAKER ###### -->



    <section class="speakers-container" id="andy-hume">

   	<div class="speaker-copy" >
    		<h1>Web Fonts as a Progressive Enhancement</h1>
    		<p></p>

   		<h2>Andy Hume</h2>
    		<p class="speaker-bio">Andy builds web sites and web applications. He currently works for the Guardian in London as client-side architect in the Digital Development team. Over the years Andy has written code and consulted for clients including the BBC, Channel 4, NBC, Fontdeck, Mozilla, and eBay. Back in the day, he regularly wrote for the now-defunct UsableType blog.</p>
    	</div>	<!-- END SPEAKER-BIO -->

   	<div class="speaker-more">
    		    		<ul>
    			<li><a href="http://www.twitter.com/@andyhume">@andyhume</a></li>
    			<li><a href="http://andyhume.net/">andyhume.net</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPEAKER ###### -->


 <section class="speakers-container" id="jenn-lukas">

	<div class="speaker-copy" >
 		<h1>On Icon Fonts and Working with Designers</h1>
 		<p></p>

		<h2>Jenn Lukas</h2>
 		<p class="speaker-bio">Jenn Lukas is a web developer working with Happy Cog in Philadelphia. She writes for The Nerdary and has a regular column in .net magazine. When she’s not crafting sites with the finest of web standards, Jenn teaches HTML and CSS for GirlDevelopIt.</p>
 	</div>	<!-- END SPEAKER-BIO -->

	<div class="speaker-more">
 		 		<ul>
 			<li><a href="http://www.twitter.com/@jennlukas">@jennlukas</a></li>
 			<li><a href="http://jennlukas.com/">Jennlukas.com/</a></li>
 		</ul>
 	</div><!-- END MORE-BIO -->
</section><!-- ########  END SPEAKER ###### -->

	<div class="speaker-nav">
		<h2>Speakers &amp; Sessions</h2>
		<ul>
			<li><a href="#erik-spiekermann">Erik Spiekermann</a></li>
			<li><a href="#mark-boulton">Mark Boulton</a></li>
			<li><a href="#gerry-leonidas">Gerry Leonidas</a></li>
			<li><a href="#ben-terrett">Ben Terrett</a></li>
			<li><a href="#kutlu-canlioglu">Kutlu Çanlıoğlu</a></li>
			<li><a href="#nina-stoessinger">Nina Stössinger</a></li>
			<li><a href="#andy-hume">Andy Hume</a></li>
			<li><a href="#jenn-lukas">Jenn Lukas</a></li>
		</ul>
	</div><!-- END SPEAKER-NAV -->

</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
