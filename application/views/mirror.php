<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>My Mirror</title>
	
	<?php echo link_tag('css/main.css'); ?>
	<?php echo link_tag('css/weather-icons.css'); ?>
	<meta name="google" value="notranslate" />
</head>
<body>

	<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
	<div class="top right"><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
	<div class="center-ver center-hor"><!-- <div class="dishwasher light">Vaatwasser is klaar!</div> --></div>
	<!-- <div class="lower-third center-hor"><div class="compliment light"></div></div>-->

    <div class="bottom center-hor"><div class="buie small"><?php echo $rain;?></div></div>
	<div class="bottom center-hor"><div class="news medium"></div></div>

</body>
</html>

<script src="<?php echo base_url();?>js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/config.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/moment-with-locales.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/weather/weather.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/time.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/main.js?nocache=<?php echo md5(microtime()) ?>" type="text/javascript"></script>
