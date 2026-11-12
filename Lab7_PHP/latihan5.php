 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form GET</title>
</head>
<body>

    <h2>Pencarian Data</h2>

    <form method="GET" action="">
        <label>Masukkan Kata:</label>
        <input type="text" name="kata">
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);

        echo "<p>Kata yang dicari: " .
        htmlspecialchars($kata, ENT_QUOTES, "UTF-8") .
        "</p>";
    }
    ?>

</body>
</html>