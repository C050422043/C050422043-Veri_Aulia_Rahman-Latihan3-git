<?php
$jumlah_kelipatan = 0;

for ($bilangan = 3; $bilangan <= 127; $bilangan++) {
    if ($bilangan % 6 == 0) {
        $jumlah_kelipatan++;
    }
}

echo "Banyaknya bilangan bulat mulai dari 3 hingga 127 yang merupakan kelipatan 6 adalah: " . $jumlah_kelipatan;
?>
