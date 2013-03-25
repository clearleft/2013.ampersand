<!DOCTYPE html>
<?php $thisPage="speakerspage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Speaker</title>

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
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
    		<h3>More Info</h3>
    		<ul>
    			<li><a href="http://www.twitter.com/spiekermann">@espiekermann on Twitter</a></li>
    			<li><a href="http://spiekermann.com/">spiekermann.com/</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPIEKERMANN ###### -->
   
   <section class="speakers-container" id="mark-boulton">
	
  		<div class="speaker-copy" >
   		<h1>Typography in Responsive Design</h1>
   		<p></p>
	
  		<h2>Mark Boulton</h2>
   		<p class="speaker-bio">Mark Boulton is a web designer and author, and member of the ISTD. He is the founder of Mark Boulton Design, and co-founder of indie publisher Five Simple Steps. Sometimes outspoken, always passionate, Mark is obsessed with applying the fundamentals of good typographic design on the web. Mark lives in South Wales with his wife and daughter, a small collection of neglected bonsai and a guitar he wish he owned when he was 18.</p>
   	</div>	<!-- END SPEAKER-BIO -->
	
  		<div class="speaker-more">
  	 		<h3>More Info</h3>
  	 		<ul>
  	 			<li><a href="http://www.twitter.com/markboulton">@markboulton on Twitter</a></li>
  	 			<li><a href="www.markboulton.co.uk">www.markboulton.co.uk</a></li>
  	 			<li><a href="#">Article, “Type Today”</a></li>
  	 			<li><a href="#">Book, “Responsive  Web Type ”</a></li>
  	 		</ul>
  	 	</div><!-- END MORE-BIO -->
  </section><!-- ########  END SPEAKER ###### -->
  
  <section class="speakers-container" id="gerry-leonidas">
	
 	<div class="speaker-copy" >
  		<h1>The Newest New Typography</h1>
  		<p></p>
	
 		<h2>Gerry Leonidas</h2>
  		<p class="speaker-bio">Gerry is a consultant and Senior Lecturer of typography and typeface design at the University of Reading. His consultancy focuses on typeface design and typography with particular expertise in Greek typography. Gerry’s perspective is one of placing typography in a wider context, helping designers develop an understanding of the basic principles, and gain an insight into the potential for originality. </p>
  	</div>	<!-- END SPEAKER-BIO -->
	
 	<div class="speaker-more">
  		<h3>More Info</h3>
  		<ul>
  			<li><a href="http://www.twitter.com/@gerryleonidas">@gerryleonidas on Twitter</a></li>
			<li><a href="http://www.twitter.com/@typefacedesign">@typefacedesign on Twitter</a></li>
  			<li><a href="http://leonidas.org/">leonidas.org/</a></li>
  		</ul>
  	</div><!-- END MORE-BIO -->
 </section><!-- ########  END SPEAKER ###### -->
  
	 
	 <section class="speakers-container"  id="ben-terrett">
		
 		<div class="speaker-copy" >
	 		<h1>Designing GOV.UK</h1>
	 		<p></p>
		
			<h2>Ben Terrett</h2>
	 		<p class="speaker-bio">Ben is Head of Design at the Government Digital Service, in the Cabinet Office for the UK Government. Before that he was Design Director at Wieden & Kennedy London. In 2010 Ben won the Graphics category in the Design Museum's Designs Of The Year Awards. Ben has spoken about design on Radio 4's Today programme and has been a D&AD judge several times.</p>
	 	</div>	<!-- END SPEAKER-BIO -->
		
 		<div class="speaker-more">
 	 		<h3>More Info</h3>
 	 		<ul>
 	 			<li><a href="http://www.twitter.com/@ben_terret">@ben_terret on Twitter</a></li>
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
    		<p class="speaker-bio">Kutlu is Creative Director of BBC iPlayer where he leads the user experience and design team. Before leading the iPlayer team, Kutlu was the Creative Director for the BBC's Global Experience Language and responsible for championing the role of craftsmanship around typography. </p>
    	</div>	<!-- END SPEAKER-BIO -->
	
   	<div class="speaker-more">
    		<h3>More Info</h3>
    		<ul>
    			<li><a href="http://www.twitter.com/@kutluc">@kutluc on Twitter</a></li>
    		</ul>
    	</div><!-- END MORE-BIO -->
   </section><!-- ########  END SPEAKER ###### -->


    <section class="speakers-container" id="nina-stossinger">
	
   	<div class="speaker-copy" >
    		<h1>Being Ernestine</h1>
    		<p></p>
	
   		<h2>Nina Stössinger</h2>
    		<p class="speaker-bio">Nina is a self-employed designer based in Basel, where she works in graphic and web design, typography and book design. Nina also teaches screen typography at FH Dresden and is a contributor to We Love Typography. Her nights and weekends are often spent working on her own type projects, resulting in the release of her first commercial typeface in 2011.</p>
    	</div>	<!-- END SPEAKER-BIO -->
	
   	<div class="speaker-more">
    		<h3>More Info</h3>
    		<ul>
    			<li><a href="http://www.twitter.com/@ninastoessinger">@ninastoessinger on Twitter</a></li>
    			<li><a href="http://ninastoessinger.com">ninastoessinger.com</a></li>
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
 		<h3>More Info</h3>
 		<ul>
 			<li><a href="http://www.twitter.com/@jennlukas">@jennlukas on Twitter</a></li>
 			<li><a href="http://jennlukas.com/">Jennlukas.com/</a></li>
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
 		<h3>More Info</h3>
 		<ul>
 			<li><a href="http://www.twitter.com/@andyhume">@andyhume on Twitter</a></li>
 			<li><a href="http://andyhume.net/">andyhume.net</a></li>
 		</ul>
 	</div><!-- END MORE-BIO -->
</section><!-- ########  END SPEAKER ###### -->
	
	<div class="speaker-nav">
		<h2>Speakers & Sessions</h2>
		<ul>
			<li><a href="#erik-spiekermann">Erik Spiekermann</a></li>
			<li><a href="#mark-boulton">Mark Boulton</a></li>
			<li><a href="#gerry-leonidas">Gerry Leonidas</a></li>
			<li><a href="#ben-terrett">Ben Terrett</a></li>
			<li><a href="#kutlu-canlioglu">Kutlu Çanlıoğlu</a></li>
			<li><a href="#nina-stossinger">Nina Stössinger</a></li>
			<li><a href="#jenn-lukas">Jenn Lukas</a></li>
			<li><a href="#andy-hume">Andy Hume</a></li>
		</ul>
	</div><!-- END SPEAKER-NAV -->
	
</div>
		
<?php include("includes/footer.php"); ?>

</body>
</html>
