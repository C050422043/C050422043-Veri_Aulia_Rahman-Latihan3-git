<?php
// Membuat array asosiatif
$pegawai = array(
    "lina" => 25,
    "arni" => 30,
    "jona" => 22,
    "punjabi" => 28,
    "marcus" => 35,
    "marlin" => 29
);

// Mencetak array sebelum diurutkan
echo "Array Sebelum Diurutkan:<br>";
foreach ($pegawai as $nama => $usia) {
    echo "$nama: $usia tahun<br>";
}

// Mengurutkan array berdasarkan nilai (usia) secara ascending (kecil ke besar)
asort($pegawai);
echo "<br>Array Setelah Diurutkan (asort):<br>";
foreach ($pegawai as $nama => $usia) {
    echo "$nama: $usia tahun<br>";
}

// Mengurutkan array berdasarkan nilai (usia) secara descending (besar ke kecil)
arsort($pegawai);
echo "<br>Array Setelah Diurutkan (arsort):<br>";
foreach ($pegawai as $nama => $usia) {
    echo "$nama: $usia tahun<br>";
}

// Mengurutkan array berdasarkan kunci (nama) secara ascending
ksort($pegawai);
echo "<br>Array Setelah Diurutkan (ksort):<br>";
foreach ($pegawai as $nama => $usia) {
    echo "$nama: $usia tahun<br>";
}

// Mengurutkan array berdasarkan kunci (nama) secara descending
krsort($pegawai);
echo "<br>Array Setelah Diurutkan (krsort):<br>";
foreach ($pegawai as $nama => $usia) {
    echo "$nama: $usia tahun<br>";
}
?>
