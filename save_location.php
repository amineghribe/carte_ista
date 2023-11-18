<?php

$my_file = fopen("lovation.txt", "w");
$information = "lat:" . $_GET["lat"] . "\nlong:" . $_GET["long"];
fwrite($my_file, $information)
fclose($my_file)


?>