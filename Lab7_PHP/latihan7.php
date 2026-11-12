 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Belanja</title>
</head>
<body>

    <h2>Form Perhitungan Belanja</h2>

    <form method="POST" action="">
        <label>Nama Barang:</label>
        <input type="text" name="barang">

        <br><br>

        <label>Harga Barang:</label>
        <input type="number" name="harga">

        <br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah">

        <br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $barang = trim($_POST["barang"] ?? "");
        $harga = $_POST["harga"] ?? "";
        $jumlah = $_POST["jumlah"] ?? "";

        if ($barang === "" || !is_numeric($harga) || $harga < 0 ||
            !ctype_digit((string)$jumlah) || $jumlah < 1) {
            echo "<p>Data yang dimasukkan tidak valid. Periksa kembali!</p>";
        } else {
            $subtotal = $harga * $jumlah;

            echo "<h3>Rincian Belanja</h3>";
            echo "Nama Barang: " . htmlspecialchars($barang, ENT_QUOTES, "UTF-8") . "<br>";
            echo "Harga: Rp " . number_format($harga, 0, ",", ".") . "<br>";
            echo "Jumlah: " . $jumlah . "<br>";
            echo "Total Belanja: Rp " . number_format($subtotal, 0, ",", ".");
        }
    }
    ?>

</body>
</html>