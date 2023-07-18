<?php
function denseRanking($scores, $gitsScores) {
    // Urutkan array dari besar ke kecil
    rsort($scores);

    $ranks = array(); // Array untuk ranking

    foreach ($gitsScores as $gitsScore) {
        // Mencari indeks tempat GITS seharusnya berada dalam array skor unik
        $rank = 1;
        foreach ($scores as $score) {
            if ($gitsScore < $score) {
                $rank++;
            } else {
                break;
            }
        }
        $ranks[] = $rank;
    }

    return $ranks;
}

// Input jumlah pemain dan skornya
$playerCount = readline("Masukkan jumlah pemain: ");

$scores = readline("Masukkan skor: ");
$scoresValues = explode(' ', $scores);

// Input jumlah game dan skor gits
$gameCount = readline("Masukkan jumlah game: ");

$scores = readline("Masukkan skor: ");
$gitsScores = explode(' ', $scores);

// Jika jumlah yang di input tidak sama dengan jumlah skor
if($playerCount != count($scoresValues) || $gameCount != count($gitsScores)){
    echo("input tidak valid");
}
else{
    // Memanggil fungsi denseRanking dan mencetak hasilnya
    $output = denseRanking($scoresValues, $gitsScores);
    echo implode(' ', $output);
}
?>
