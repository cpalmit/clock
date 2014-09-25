<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>What time is it?</title>
	<?php require "logic.php"; ?>
	<link rel="stylesheet" href="styles.css" type="text/css">		
</head>

<body class="<?php echo $timeofday ?>">

	<h1>It is <?php echo $time; ?></h1> 
	<!--<p>But in the 24 hour clock, it's <? echo $hour .":". $minute; ?></p>-->

	<p>Time zone: <?php echo $timezone; ?> </p>
	<img src="http://thewc.co.s3.amazonaws.com/challenges/php-<?php echo $timeofday; ?>.png" alt="Scenery matching the time of day"> 

</body>
</html>