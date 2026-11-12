 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama">
        <br><br>

        <label>NIM:</label>
        <input type="text" name="nim">
        <br><br>

        <label>Program Studi:</label>
        <input type="text" name="prodi">
        <br><br>

        <label>Semester:</label>
        <input type="number" name="semester">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <button type="submit">Kirim Data</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"] ?? "");
        $nim = trim($_POST["nim"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");
        $semester = $_POST["semester"] ?? "";
        $email = trim($_POST["email"] ?? "");

        $error = [];

        if ($nama === "") {
            $error[] = "Nama wajib diisi.";
        }

        if ($nim === "") {
            $error[] = "NIM wajib diisi.";
        }

        if ($prodi === "") {
            $error[] = "Program studi wajib diisi.";
        }

        if (!filter_var($semester, FILTER_VALIDATE_INT) ||
            $semester < 1 || $semester > 14) {
            $error[] = "Semester harus berupa angka 1 sampai 14.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Format email tidak valid.";
        }

        if (!empty($error)) {
            echo "<h3>Terjadi Kesalahan:</h3>";
            foreach ($error as $pesan) {
                echo htmlspecialchars($pesan) . "<br>";
            }
        } else {
            echo "<h3>Data Mahasiswa Berhasil Disimpan</h3>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "NIM: " . htmlspecialchars($nim) . "<br>";
            echo "Program Studi: " . htmlspecialchars($prodi) . "<br>";
            echo "Semester: " . htmlspecialchars((string)$semester) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        }
    }
    ?>

</body>
</html>