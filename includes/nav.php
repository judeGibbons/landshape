<ul class="nav">
<li><span><canvas id="togglemenutriangle"><div id="noncanvastoggleimg"></div></canvas></span><a<?php if(($thisPage=="services")||($thisDir=="services")||($thisPage=="community")||($thisPage=="residential")||($thisPage=="garden")||($thisPage=="sustainability")) { echo' class="current"';} ?> href="services.php">What we do</a>
	<ul class=" closed">
	<li><span><canvas id="dropdownmenutriangle"><div id="noncanvasdropdownimg"></div></canvas></span><a<?php if($thisPage=="community") { echo' class="current"';} ?> href="community.php">Community design</a></li>
	<li><a<?php if($thisPage=="residential") { echo' class="current"';} ?> href="residential.php">Residential design</a></li>
	<li><a<?php if($thisPage=="garden") { echo' class="current"';} ?> href="garden.php">Garden design</a></li>
	<li><a<?php if($thisPage=="sustainability") { echo' class="current"';} ?> href="sustainability.php">Sustainability</a></li>
	</ul></li>
<li class="tempclear"><a<?php if($thisPage=="about") { echo' class="current"';} ?> href="about.php">About us</a></li>
<li><a<?php if($thisPage=="contact") { echo' class="current"';} ?> href="contact.php">Contact us</a></li>

</ul>
