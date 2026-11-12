 <?php

$nim = "312510348";

if (ctype_digit($nim) && strlen($nim) == 9) {
    echo "NIM: " . $nim . "<br>";
    echo "NIM valid.";
} else {
    echo "NIM tidak valid. NIM harus terdiri dari 9 angka.";
}

?>