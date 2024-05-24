<?php
//www.haker.edu.pl - jak sprawdzić czyjeś IP 
$adres_ip = $_SERVER['REMOTE_ADDR'];
$plik = fopen("ip.txt", "a");
flock($plik, 2);
fwrite($plik, $adres_ip . "\n");
flock($plik, 3);
fclose($plik);
?>
