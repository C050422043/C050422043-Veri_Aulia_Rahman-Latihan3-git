<?php
// Array asosiatif yang telah dibuat sebelumnya
$pegawai = array(
    "lina" => 25,
    "arni" => 30,
    "jona" => 22,
    "punjabi" => 28,
    "marcus" => 35,
    "marlin" => 29
);

// Fungsi 1: count() - Menghitung jumlah elemen dalam array
$jumlah_pegawai = count($pegawai);
echo "Jumlah pegawai: $jumlah_pegawai<br>";

// Fungsi 2: array_key_exists() - Memeriksa apakah kunci tertentu ada dalam array
$nama_pegawai = "lina";
if (array_key_exists($nama_pegawai, $pegawai)) {
    echo "$nama_pegawai adalah salah satu pegawai.<br>";
} else {
    echo "$nama_pegawai bukan pegawai.<br>";
}

// Fungsi 3: array_values() - Mengambil semua nilai (values) dari array dan membuat array baru
$usia_pegawai = array_values($pegawai);
echo "Usia pegawai: ";
foreach ($usia_pegawai as $usia) {
    echo "$usia tahun, ";
}
echo "<br>";

// Fungsi 4: array_flip() - Menukar kunci dengan nilai dalam array
$pegawai_terbalik = array_flip($pegawai);
echo "Array terbalik (kunci dan nilai ditukar):<br>";
foreach ($pegawai_terbalik as $kunci => $nilai) {
    echo "$kunci: $nilai<br>";
}

// Fungsi 5: array_search() - Mencari nilai tertentu dalam array dan mengembalikan kunci pertama yang cocok
$cari_usia = 28;
$nama = array_search($cari_usia, $pegawai);
if ($nama) {
    echo "Nama pegawai dengan usia $cari_usia tahun: $nama<br>";
} else {
    echo "Tidak ada pegawai dengan usia $cari_usia tahun.<br>";
}
?>
