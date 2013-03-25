<!-- Main NAV -->
<nav role="navigation" id="main-nav">
		
	<ul id="nav">
		<li <?php if ($thisPage=="homepage") echo " class=\"currentpage\""; ?>><a href="/">Home</a></li>
		<li <?php if ($thisPage=="schedulepage") echo " class=\"currentpage\""; ?>><a href="/schedule">Schedule</a></li>
		<li <?php if ($thisPage=="workshoppage") echo " class=\"currentpage\""; ?>><a href="/workshops">Workshops</a></li>
		<li <?php if ($thisPage=="exhibitionpage") echo " class=\"currentpage\""; ?>><a href="/exhibition">Exhibition</a></li>
		<li <?php if ($thisPage=="locationpage") echo " class=\"currentpage\""; ?>><a href="/location">Location</a></li>
		<li <?php if ($thisPage=="sponsorspage") echo " class=\"currentpage\""; ?>><a href="/sponsors">Sponsors</a></li>
		<li id="back"><a href="#top">Back to top</a></li>
	</ul>
		
</nav>


