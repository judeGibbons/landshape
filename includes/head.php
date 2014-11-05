<?php
$pageArray = explode('/', $_SERVER['PHP_SELF']);
$thisPageArray = explode('.', array_pop($pageArray));
$thisDir = $pageArray[2]; //MAKE 1 ON LIVE SERVER, 2 ON LOCAL/TEST SITE
$thisPage = $thisPageArray[0];
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset=UTF-8>
<meta name="viewport" content="initial-scale=1.0, width=device-width" /> 
<meta content="LandShape Design is a landscape architecture and urban design company in Romsey, Hampshire, led by Helen Palmer CMLI.</p>
" name="description">
<meta content="landscape architect, landscaping, urban, garden, community, design, EIA, LVIA, heritage, conservation, planning" name="keywords">
<meta name="author" content="Jude Gibbons, www.gimaju.net" />

<meta name="robots" content="noindex, nofollow"> <!-- REMOVE ON LIVE -->


<title><?php echo $pagetitle; ?> :: LandShape Design</title>


<link rel="stylesheet" type="text/css" href="landshape.css">

<!-- NB IE11 devtools doesn't see conditional comments so need to manually comment in to test <=IE9 -->

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="ielt9fallback.css" />
<![endif]-->
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="ielt8fallback.css" />
<![endif]-->
  
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon">

<script type="text/javascript" src="scripts/landshape.js" ></script>


</head>

<body class=" no-js">

<div id="header">
	<div id="logo">
		<div class="container">
			<h1><a href="index.php">LandShape</a></h1>
			<img src="graphics/landshape-logo-300x83.png" alt="LandShape logo">
		</div> <!--container-->
	</div> <!--logo-->
	<div class=" closed container">


	<?php 
	include("includes/nav.php");
	?>

	<a id="togglemenuicon" href="#navfooter"></a>
	<div class="social"><a href="https://www.facebook.com/pages/LandShape/161325393931914"><img src="graphics/facebook-24x24.png" alt="LandShape's Facebook page"></a>
	<a href="https://twitter.com/LandShape"><img src="graphics/twitter-24x24.png" alt="LandShape's Twitter feed"></a></div>

	</div> <!--container-->
</div> <!--header-->