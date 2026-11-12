 <?php

function formatRupiah($angka)
{
    return "Rp " . number_format($angka, 0, ",", ".");
}

$harga1 = 15000;
$harga2 = 25000;
$harga3 = 50000;

echo "Harga Buku 1: " . formatRupiah($harga1) . "<br>";
echo "Harga Buku 2: " . formatRupiah($harga2) . "<br>";
echo "Harga Buku 3: " . formatRupiah($harga3);

?>