<?php
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

$random = file_get_contents("http://randomword.setgetgo.com/get.php");

echo $random;
?>