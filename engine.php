<?php
header("Access-Control-Allow-Origin: *"); //this will allow any page to send GET AJAX request
$user = $_GET["u"]; //taking "USERNAME" from query "u" from current url as variable, e.g https://CURRENTURL.com/THISFILE.php?u=USERNAME
$jzon = file_get_contents("https://www.instagram.com/".$user); //getting source code of the user profile instagram page
preg_match_all('/<img.*?src\s*=.*?>/', $jzon, $matches, PREG_SET_ORDER); //getting all image url from the page
preg_match( '/src="([^"]*)"/i', $matches[0][0], $src ) ; //getting the first photo as it's the profile photo
$trimmed = str_replace('/vp', '', $src[1]);
$trimmed = str_replace('s150x150/', 's1080x1080', $trimmed); //changing the size of the photo from 150x150 to its maximum size
echo "<img src='".$trimmed."'/>"; //giving response
?>
