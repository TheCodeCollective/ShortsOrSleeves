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
function objectsIntoArray($arrObjData, $arrSkipIndices = array())
{
    $arrData = array();

    // if input is object, convert into array
    if (is_object($arrObjData)) {
        $arrObjData = get_object_vars($arrObjData);
    }

    if (is_array($arrObjData)) {
        foreach ($arrObjData as $index => $value) {
            if (is_object($value) || is_array($value)) {
                $value = objectsIntoArray($value, $arrSkipIndices); // recursive call
            }
            if (in_array($index, $arrSkipIndices)) {
                continue;
            }
            $arrData[$index] = $value;
        }
    }
    return $arrData;
}

function parseFeed()
{
	$xmlUrl = "feed.xml"; // XML feed file/URL
	$xmlStr = file_get_contents($xmlUrl);
	$xmlObj = simplexml_load_string($xmlStr);
	$arrXml = objectsIntoArray($xmlObj);
	print_r($arrXml);
	echo('done');
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 5 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
		<meta name="generator" content="TextMate http://macromates.com/">
		<meta name="author" content="The Code Collective">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type='text/css' rel='stylesheet' href='style.css' />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>

        <script src="Scripts/jgcharts/jgcharts.js" type="text/javascript"></script>


        <script>
             jQuery(document).ready(function($) {
                 var api = new jGCharts.Api();
                 jQuery('<img>').attr('src', api.make({data : [[153], [113], [120]]})).appendTo("#tempGraph");

            });
        </script>
        <title>Shorts Or Sleeves</title>
    </head>
    <body>
    <header>
			<img src="images/soslogo.png" width="139" height="70" alt="Soslogo">
    </header>
    <div id="content">
		<div id='temp'>
			<h3>78</h3>
	 		<img src="images/sun.gif" width="200" height="200" alt="Sun">
		</div>
        <div id="tempGraph"></div>

    </div>
<?php
	parseFeed();
?>
    </body>
</html>

