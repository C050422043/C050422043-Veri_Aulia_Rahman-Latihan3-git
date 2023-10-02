<!DOCTYPE html>
<html>
<head>
    <title>Hitung Jumlah Hari dalam Sebulan</title>
</head>
<body>
    <h1>Hitung Jumlah Hari dalam Sebulan</h1>
    <form method="post" action="">
        <label for="bulan">Pilih Bulan:</label>
        <select id="bulan" name="bulan">
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bulan = $_POST["bulan"];

        switch ($bulan) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $jumlah_hari = 31;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $jumlah_hari = 30;
                break;
            case 2:
                $tahun = date("Y"); // Mengambil tahun saat ini
                if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                    $jumlah_hari = 29; // Tahun kabisat
                } else {
                    $jumlah_hari = 28; // Bukan tahun kabisat
                }
                break;
            default:
                $jumlah_hari = "Bulan tidak valid";
        }

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "<p>Bulan yang dipilih: " . date("F", mktime(0, 0, 0, $bulan, 1, date("Y"))) . "</p>";
        echo "<p>Jumlah hari dalam bulan: " . $jumlah_hari . "</p>";
    }
    ?>
</body>
</html>