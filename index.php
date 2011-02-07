<?php
//test comment
$pages = array();

$curPage = 'home';
if(isset($_GET['page']) && array_key_exists($_GET['page'],$pages))
	$curPage = $_GET['page'];
$mainContentFile = 'default.php';

if(array_key_exists($curPage,$pages)) {
	$mainContentFile = $pages[$curPage];
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
		<meta name="generator" content="TextMate http://macromates.com/">
		<meta name="author" content="The Code Collective">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type='text/css' rel='stylesheet' href='style.css' />
        <title>Shorts Or Sleeves</title>
    </head>
    <body>
		<div id="container">
			<img src="images/soslogo.png" width="139" height="70" alt="Soslogo">
	
		</div>
	</body>
</html>

