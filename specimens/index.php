<?php

$specimens = array(
    1 => "José María Román Gálvez",
    2 => "Laura Martín Perea",
    3 => "Sabina Chipară",
    4 => "Carlos de Toro Hernando",
    5 => "Daniel Megías Senso",
    6 => "Joan Martí Gargallo",
    7 => "Mercedes Jáuregui",
    8 => "Rebekka Marleaux"
);

$numspecimens   = count($specimens);
$specimen       = (isset($_REQUEST["specimen"]))?$_REQUEST["specimen"]:1;

$next = $specimen + 1;
$prev = $specimen - 1;

if($prev<1) {$prev=$numspecimens;}
if($next>$numspecimens) {$next=1;}
?>
<!DOCTYPE html>
<?php $thisPage="exhibitionpage"; ?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ampersand 2013 &middot; Exhibition</title>
<style>

body {margin:0; padding:0}
#amp #specimenheader {
	background: #1a6259; /* Old browsers */
	background: -moz-linear-gradient(left,  #1a6259 0%, #193749 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#1a6259), color-stop(100%,#193749)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  #1a6259 0%,#193749 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  #1a6259 0%,#193749 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  #1a6259 0%,#193749 100%); /* IE10+ */
	background: linear-gradient(to right,  #1a6259 0%,#193749 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1a6259', endColorstr='#1f445a',GradientType=1 ); /* IE6-9 */
    font-family:"Karmina Bold", Cambria, Georgia, serif;  font-weight:bold; font-style:normal; color: #fff; font-size:32px; letter-spacing: 0.04em; line-height:1em;
    border-bottom:5px solid rgba(0,0,0,0.5);
    position:fixed;
    width:100%;
    padding:0.75em 0 0.5em 0;
    opacity:0.9;
}

.wf-loading body { opacity:0;}

body {
    opacity:1;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
  transition: opacity 0.6s;
}

#amp #specimenheader #specimendesigner {
    font-family:"Karmina Bold", Cambria, Georgia, serif;  font-weight:bold; font-style:normal; color: #fff; letter-spacing: 0.04em; font-size:1em;
    text-align:center;
    position:relative;
    top:0.25em;
}

#ampconf {
	font-size: 14px;
	text-align: center;
}

#amp #ampconf a {
	padding: 0;
	left: 0;
	top: 0;
	width: 100%;
	letter-spacing: 0;
}

#amp a {
    position:absolute;
    top:1em;
    color:#fff;
    z-index:10;
    padding:0.25em 0.5em 0 0.5em;
    text-decoration: none;
    background:none;
}

#amp a[rel="prev"] {
    left:0;
}

#amp a[rel="next"] {
    right:0;
}

#sample {
    padding-top:3.5em;
}
</style>

</head>
<body id="amp">

    <div id="specimenheader">
        <div id="ampconf"><a href="/exhibition.php">Ampersand Conference</a></div>
        <a href="?specimen=<?php echo $prev ?>" rel="prev">&larr;</a>
        <div id="specimendesigner"><?php echo $specimens[$specimen] ?></div>
        <a href="?specimen=<?php echo $next ?>" rel="next">&rarr;</a>
    </div>

    <div id="sample">
        <?php include("$specimen/index.html"); ?>
    </div>

</body>
</html>
