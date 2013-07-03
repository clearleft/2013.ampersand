<!DOCTYPE html>
<?php $thisPage="exhibitionpage"; ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Student Typeface Exhibition</title>
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
<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
</head>

<body id="wrapper" class="vevent exhibition-page">

	<?php include("includes/header.php"); ?>

<!-- sponsors-page -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	
	<article class="section exhibition-page clearfix">
		<h1>Student Typeface Exhibition</h1>
		<p class="loud">Ampersand 2013 is delighted to announce the first international student typeface exhibition, showcasing the best of student type design from around the world.</p>
		
		<section class="sponsorship-pack">
		
		
		<a href="Student_Exhibition_Book.pdf">
			<div class="button">Student Exhibition Book<br/><small>(24.3Mb PDF)</small></div>
		</a>
		<br />

<a href="Student_Exhibition.pdf">
	<div class="button">Student Exhibition Media Pack<br/><small>(1.3Mb PDF)</small></div>
</a>

		</section>
		
		<p>The conference presented the diversity of emerging designers&#8217; work in both print and web specimens, along with a bound take-home catalogue recording the thriving landscape of type design education today.</p>
		
<ul class="posters">		
<li><a class="fancybox" data-title-id="title-1" href="posters/big/001.jpg"><img src="posters/th/001.jpg" alt=""/></a>
<div id="title-1" class="hidden">
    This is 1st title. <a href="http://google.com">Some link</a>
</div></li>
<li><a class="fancybox" data-title-id="title-1" href="posters/big/002.jpg"><img src="posters/th/002.jpg" alt=""/></a>
<div id="title-1" class="hidden">
    This is 2nd title. <a href="http://google.com">Some link</a>
</div></li>
</ul>
		
	</article>
		
</div><!-- END MAIN CONTENT -->	
	
<?php include("includes/footer.php"); ?>
	
<script type="text/javascript">
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        beforeLoad: function() {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);
            
                if (el.length) {
                    this.title = el.html();
                }
            }
        }
    });
</script>
</body>
</html>
