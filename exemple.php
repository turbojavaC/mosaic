<?php
$directory='./uploaded/';
$imgs=opendir($directory);
$values=readdir($imgs);

$tab=scandir($directory);

foreach ($tab as $key => $imgs) {
	$img[$key]=$imgs;

	//filter_img($img);
	echo $img[$key];
	//$links=$directory.$img;
	/*foreach ($links as $link) {
		echo $link[0];
	}*/
}


function filter_img($liens)
{
	$var="";
	if ($_FILES[$liens]["type"]=="image/png" || $_FILES[$liens]["type"]=="image/jpg") {
		$var=$liens;	
	}
	return $var;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="<?php echo $link; ?>">

</body>
</html>
