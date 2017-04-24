<!DOCTYPE html>
<html>
<head>
	<title>Mosaique d'images </title>
	<link rel="stylesheet" type="text/css" href="assets/personel/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="row mosaic">

<?php
function Name($name)
{
	$name=explode(".", $name);
	return $name[0];
}
$directory="./uploaded/";
$lists=scandir($directory);
foreach ($lists as $value) {
	if (!is_dir($value)) {
		echo "<div class=\"col-lg-3 well perso\"><img src=".$directory.$value." class=\"img-responsive img-rounded general\"><div class=\"caption\"><p class=\"text-center marge\">".Name($value)."</p></div></div>";
	}
}
?>
</div>
			
	</div>
</div>
</body>
</html>
