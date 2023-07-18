<?php
function isBalancedBracket($input) {
    $stack = [];
    $openingBrackets = ['(', '{', '['];
    $closingBrackets = [')', '}', ']'];

    // Iterasi melalui setiap karakter dalam input
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        // Jika karakter adalah bracket buka, tambahkan ke dalam stack
        if (in_array($char, $openingBrackets)) {
            array_push($stack, $char);
        }
        // Jika karakter adalah bracket tutup, periksa kecocokan dengan bracket terakhir dalam stack
        elseif (in_array($char, $closingBrackets)) {
            // Jika stack kosong atau bracket tutup tidak cocok dengan bracket buka terakhir dalam stack, return "NO"
            if (empty($stack) || $char != getMatchingBracket(array_pop($stack))) {
                return "NO";
            }
        }
    }

    // Jika setelah iterasi stack masih memiliki elemen, return "NO"
    if (!empty($stack)) {
        return "NO";
    }

    // Jika semua bracket sudah terpasangkan dengan benar, return "YES"
    return "YES";
}

function getMatchingBracket($bracket) {
    switch ($bracket) {
        case '(':
            return ')';
        case '{':
            return '}';
        case '[':
            return ']';
    }
}

// Input
$input = readline("Masukkan rangkaian bracket: ");

// Memanggil fungsi isBalancedBracket dan mencetak hasilnya
$result = isBalancedBracket($input);
echo $result;
?>