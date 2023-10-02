<?php
$bil = 5;

while ($bil <= 100) { // Gunakan operator <= untuk memeriksa hingga 100
    if ($bil % 10 == 0) { // Periksa apakah bilangan habis dibagi 10
        echo $bil . "<br />";
    }
    $bil++;
}
?>
