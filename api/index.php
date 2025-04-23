<?php
header('Content-Type: application/x-mpegURL');
$url = "http://sansatplus.net:88/get.php?username=ZV5v9EmPXrDPV&password=EUKqem5hexGtrfv&type=m3u_plus";
echo file_get_contents($url);
?>