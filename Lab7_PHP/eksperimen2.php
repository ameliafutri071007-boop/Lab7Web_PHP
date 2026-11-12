 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Nama</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET" action="">
        <label>Masukkan Nama:</label>
        <input type="text" name="nama">
        <button type="submit">Cari</button>
    </form>

    <?php
    $mahasiswa = ["Amelia", "Alya", "Bima", "Citra", "Doni"];

    if (isset($_GET["nama"])) {
        $cari = trim($_GET["nama"]);

        if (in_array($cari, $mahasiswa)) {
            echo "<p>Nama " . htmlspecialchars($cari) . " ditemukan.</p>";
        } else {
            echo "<p>Nama " . htmlspecialchars($cari) . " tidak ditemukan.</p>";
        }
    }
    ?>

</body>
</html>