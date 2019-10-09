<?php  
$path = 'src/';
require_once $path . 'Minify.php';
require_once $path . 'JS.php';
require_once $path . 'Exception.php';
require_once $path . 'CSS.php';
use MatthiasMullie\Minify;
$minifier = new Minify\JS('lib/owlcarousel/owl.carousel.min.js');
$minifier->minify('lib/owlcarousel/owl.carousel.min.js');
$minifier = new Minify\JS('lib/appear/jquery.appear.js');
$minifier->minify('lib/appear/jquery.appear.js');
$minifier = new Minify\JS('lib/parallax/parallax.js');
$minifier->minify('lib/parallax/parallax.js');
$minifier = new Minify\JS('lib/nivo-slider/js/jquery.nivo.slider.js');
$minifier->minify('lib/nivo-slider/js/jquery.nivo.slider.js');
?>