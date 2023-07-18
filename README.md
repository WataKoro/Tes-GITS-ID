Kodingan ini menggunakan pendekatan stack untuk memeriksa keseimbangan kurung dalam sebuah rangkaian. Rincian kompleksitasnya adalah sebagai berikut:

Kompleksitas kodingan ini adalah O(n), di mana n adalah jumlah karakter dalam input.

Inisialisasi variabel-stack, variabel-openingBrackets, dan variabel-closingBrackets adalah operasi dengan kompleksitas O(1).

Iterasi for yang melintasi setiap karakter dalam input memiliki kompleksitas O(n).

Pada setiap iterasi, terdapat operasi seperti in_array(), array_push(), array_pop(), dan perbandingan karakter, yang semuanya memiliki kompleksitas O(1).

Setelah iterasi selesai, pemeriksaan kekosongan stack dan pengembalian hasil juga memiliki kompleksitas O(1).

Secara keseluruhan, kodingan ini efisien dengan kompleksitas O(n) karena hanya melakukan satu kali iterasi melalui input dan operasi lainnya memiliki kompleksitas konstan.
