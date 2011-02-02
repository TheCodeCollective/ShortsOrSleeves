<?php
$pages = array();

$curPage = 'home';
if(isset($_GET['page']) && array_key_exists($_GET['page'],$pages))
	$curPage = $_GET['page'];
$mainContentFile = 'default.php';

if(array_key_exists($curPage,$pages)) {
	$mainContentFile = $pages[$curPage];
}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type='text/css' rel='stylesheet' href='style.css' />
        <title>Shorts Or Sleeves</title>
    </head>
    <body>
		<div id='container'>
			
	
	
	</body>
</html>

