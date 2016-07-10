<!DOCTYPE html>
<html>
<head>
	<title>Hello, world!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo_blue.png" alt="logo.png"/>

	<?php

	$hamburgerPrice = 4.95;
	$milkshakePrice = 1.95;
	$colaPrice = .85;
	$tax = .075;
	$tip = .016;

	print 'Prices';
	print '';
	print 'Hamburger: ' . $hamburgerPrice;
	print 'Milk Shake: ' . $milkshakePrice;
	print 'Cola: ' . $colaPrice;
	print 'Tax: ' . $tax;
	print 'Tip: ' . $tip;
	print '';

	$totalFood = $hamburgerPrice + $hamburgerPrice + $milkshakePrice + $colaPrice;
	$pretaxTip = $totalFood * $tax;
	$taxOnFood = $totalFood * $tax;

	print 'Lunch Tab';
	print 'Food Total: ' . $totalFood;
	print 'Pretax Tip: ' . $pretaxTip;
	print 'Tax On Food: ' . $taxOnFood;
	print 'Total: ' . $totalFood + $pretaxTip + $taxOnFood;


	?>

</body>
</html>
