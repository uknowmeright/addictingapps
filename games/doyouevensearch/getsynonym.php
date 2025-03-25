<?php
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

$word = $_GET['word'];
$url = "http://thesaurus.altervista.org/thesaurus/v1?word=";
$url .= $word;
$url .= "&language=en_US&key=ZgOqMsJIA8mBcBBYjSX6&output=json";

$random = file_get_contents($url);

echo $random;
?>