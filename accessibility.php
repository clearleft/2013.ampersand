<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2013 &middot; Accessibility</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="stylesheet" href="css/styles.css">
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
</head>

<body id="wrapper" class="vevent sponsors-page">

	<?php include("includes/header.php"); ?>

<!-- sponsors-page -->
<div class="main-content">
	
	<?php include("includes/nav.php"); ?>
	
	<!-- SPONSORS -->
		<article class="section pat">
		
			<h1>Accessibility</h1>
		
			<p>The Ampersand website has been designed and built to be accessible to as wide an audience as possible. Some people with disabilities find using the web difficult and while we know that it is impossible to design a site that everyone can use, if you have problems using our site, please <a href="mailto:ampersand@clearleft.com">let us know</a> and we will do our utmost to help</p>
		
					<h2>Conference accessibility</h2>
					<p>If you have specific accessibility requirements while at the conference, please contact us and we’ll try our best to accommodate you.</p>
		
					<h2>Standards compliance</h2>
					<p>All pages validate as HTML5.</p>
		
					<h2>Links</h2>
					<p>Many links have title attributes which describe the link in greater detail, unless the text of the link already fully describes the target (such as the headline of an article).</p>
		
					<p>Whenever possible, links are written to make sense out of context. Many browsers (such as JAWS, Home Page Reader, Lynx, and Opera) can extract the list of links on a page and allow the user to browse the list, separately from the page. To aid this, link text is never duplicated; two links with the same link text always point to the same address.</p>
					<p>There are no javascript: pseudo-links. All links can be followed in any browser, even if scripting is turned off. There are no links that open new windows without warning.</p>
		
					<h2>Visual Design</h2>
					<p>This site uses cascading style sheets for visual layout. If your browser or browsing device does not support stylesheets at all, the content of each page is still readable.</p>
					<p>The layout is liquid, simply filling its window. It happily accommodates resizing text and, as relative units have been used, text can even be re-sized in Internet Explorer for Windows.</p>
				</article>
		
</div><!-- END MAIN CONTENT -->	
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
