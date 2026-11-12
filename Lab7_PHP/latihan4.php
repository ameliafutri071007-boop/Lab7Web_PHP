 <?php

function hitungDiskon($harga, $persen)
{
    $potongan = $harga * $persen / 100;
    $hargaAkhir = $harga - $potongan;

    return $hargaAkhir;
}

$hargaAwal = 150000;
$hargaSetelahDiskon = hitungDiskon($hargaAwal, 10);

echo "Harga Awal: Rp " . number_format($hargaAwal, 0, ",", ".") . "<br>";
echo "Diskon: 10%<br>";
echo "Harga Setelah Diskon: Rp " . number_format($hargaSetelahDiskon, 0, ",", ".");

?>