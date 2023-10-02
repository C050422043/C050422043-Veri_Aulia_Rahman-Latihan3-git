<?php
// Jumlah fotocopy yang diinginkan
$jumlahFotocopy = 158;

// Harga fotocopy per lembar
$hargaPerLembar = 0;

if ($jumlahFotocopy < 100) {
    $hargaPerLembar = 150;
} elseif ($jumlahFotocopy >= 100 && $jumlahFotocopy <= 200) {
    $hargaPerLembar = 100;
} else {
    $hargaPerLembar = 80;
}

// Menghitung total biaya fotocopy
$totalBiaya = $jumlahFotocopy * $hargaPerLembar;

echo "Jumlah fotocopy: " . $jumlahFotocopy . " lembar <br>";
echo "Harga per lembar: Rp. " . $hargaPerLembar . "<br>";
echo "Total biaya fotocopy: Rp. " . $totalBiaya;
?>
