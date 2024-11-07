<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Pendaftaran</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $age = htmlspecialchars($_POST["age"]);
                echo "<p><strong>Nama:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Usia:</strong> $age</p>";
            } else {
                echo "<p>Tidak ada data yang diterima.</p>";
            }
        ?>
        <a href="index.html" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
