<?php
// gross_1.php

echo "Umwandlung von Klein- in Grossbuchstaben (1)\n";
echo "--------------------------------------------\n\n";

echo "Bitte Text eingeben : ";
$text = trim(fgets(STDIN));
echo "\n";

// -----------------------------------------------

for ($n = 0; $n < strlen($text); $n++) {
    $c = substr($text, $n, 1);
    $a = chr(ord($c)-32);
    echo $a;
}

?>