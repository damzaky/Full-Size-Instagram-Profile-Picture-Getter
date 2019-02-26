<?php
header("Access-Control-Allow-Origin: *"); //this will allow any page to send GET AJAX request
$user = $_GET["u"]; //taking "USERNAME" from query "u" from current url as variable, e.g https://CURRENTURL.com/THISFILE.php?u=USERNAME
$jzon = file_get_contents("https://www.instagram.com/".$user); //getting source code of the user profile instagram page
preg_match_all('/sharedData\s=\s(.*[^\"]);<.script>/ixU', $jzon, $matches, PREG_SET_ORDER); //getting json from page
$array = json_decode($matches[0][1], true); // array to json data
$image = $array['entry_data']['ProfilePage']['0']['graphql']['user']['profile_pic_url_hd']; // scraping image from json data
echo "<img src='".$image."'/>"; //giving response
?>
