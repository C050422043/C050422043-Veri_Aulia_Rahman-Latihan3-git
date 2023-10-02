<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Mata Kuliah</title>
</head>
<body>
    <h1>Penilaian Mata Kuliah</h1>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai Anda:</label>
        <input type="text" id="nilai" name="nilai" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];

        if ($nilai >= 90 && $nilai <= 100) {
            $keterangan = "A";
            $mata_kuliah = "Baik Sekali";
        } elseif ($nilai >= 76 && $nilai <= 89) {
            $keterangan = "B";
            $mata_kuliah = "Baik";
        } elseif ($nilai >= 60 && $nilai <= 75) {
            $keterangan = "C";
            $mata_kuliah = "Cukup";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $keterangan = "D";
            $mata_kuliah = "Hampir Cukup";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $keterangan = "E";
            $mata_kuliah = "Kurang";
        } else {
            $keterangan = "Nilai Tidak Valid";
            $mata_kuliah = "Tidak Ada";
        }

        echo "<h2>Hasil Penilaian:</h2>";
        echo "<p>Nilai Anda: " . $nilai . "</p>";
        echo "<p>Keterangan: " . $keterangan . "</p>";
        echo "<p>Mata Kuliah: " . $mata_kuliah . "</p>";
    }
    ?>
</body>
</html>