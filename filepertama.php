<?php

date_default_timezone_set("Asia/Jakarta");

$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
$sapaan = "";

if ($waktu >= 5) {
    if ($waktu < 11) {
        $sapaan = "Selamat pagi";
    } elseif ($waktu < 15) {
        $sapaan = "Selamat siang";
    } elseif ($waktu < 19) {
        $sapaan = "Selamat sore";
    } else {
        $sapaan = "Selamat malam";
    }
} else {
    $sapaan = "Selamat malam";
}

echo "{$sapaan}, {$nama}! Sekarang pukul " . date('H:i') . "\n";

?>
