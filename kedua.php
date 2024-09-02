<?php

function kelilingLingkaran($jari) : float {
    return 2 * 3.14 * $jari;
}

function volumeBola($jari) : float {
    return (4 / 3) * 3.14 * $jari * $jari * $jari;
}

function volumeTabung($jari, $tinggi) : float {
    return 3.14 * $jari * $jari * $tinggi;
}

function volumeKerucut($jari, $tinggi) : float {
    return (1 / 3) * 3.14 * $jari * $jari * $tinggi;
}

$jari = 45;
$tinggi = 100;

$keliling = kelilingLingkaran($jari);
$volumeBola = volumeBola($jari);
$volumeTabung = volumeTabung($jari, $tinggi);
$volumeKerucut = volumeKerucut($jari, $tinggi);

echo "Keliling lingkaran: {$keliling}\n";
echo "Volume bola: {$volumeBola}\n";
echo "Volume tabung: {$volumeTabung}\n";
echo "Volume kerucut: {$volumeKerucut}\n";

?>
