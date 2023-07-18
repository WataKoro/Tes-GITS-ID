<?php
function a000124($n) {
    $seq = [0];
    for ($i = 0; $i < $n; $i++) {
        $seq[$i] = ($i * ($i + 1) / 2) + 1;  // Rumus A000124
    }
    return $seq;
}

// Mengambil input dari pengguna
$n = readline("Masukkan nilai n: ");

// Memanggil fungsi a000124 dan output hasilnya
$output = implode('-', a000124($n));
echo "Output: " . $output . PHP_EOL;
?>