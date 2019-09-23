<?php 

echo "Wie zit er in de klas?" .PHP_EOL;
$leerlingen = readline(">");

$leerlingenGesplitst = explode(" ", $leerlingen);

echo "De studenten in de klas zijn:" . PHP_EOL . print_r ($leerlingenGesplitst);

?>