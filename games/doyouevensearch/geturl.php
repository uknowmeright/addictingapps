<?php
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

$image = $_POST['image'];
$url = "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=" + $image + "&rsz=1&start=0"; 
$imageurl = file_get_contents($url);

echo $image;
?>