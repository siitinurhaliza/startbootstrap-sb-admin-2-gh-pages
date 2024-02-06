<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu Pustaka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['proses'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Contoh pemanggilan fungsi untuk cetak kartu pustaka
    cetakKartuPustaka($nama, $nisn, $kelas, $jk, $alamat);
}

function cetakKartuPustaka($nama, $nisn, $kelas, $jk, $alamat) {
    echo '<div class="card">';
    echo '<h2>Kartu Pustaka</h2>';
    echo '<p>Nama: ' . $nama . '</p>';
    echo '<p>NISN: ' . $nisn . '</p>';
    echo '<p>Kelas: ' . $kelas . '</p>';
    echo '<p>Jenis Kelamin: ' . $jk . '</p>';
    echo '<p>Alamat: ' . $alamat . '</p>';
    echo '</div>';
}
?>

<form method="post" action="">
    <label class="fw-bold" for="nama">Nama:</label>
    <input type="text" class="form-control" name="nama"><br>

    <label class="fw-bold" for="nisn">NISN:</label>
    <input type="text" class="form-control" name="nisn"><br>

    <label class="fw-bold" for="kelas">Kelas:</label>
    <input type="text" class="form-control" name="kelas"><br>

    <label class="fw-bold" for="jk">Jenis Kelamin:</label>
    <input type="text" class="form-control" name="jk"><br>

    <label class="fw-bold" for="alamat">Alamat:</label>
    <input type="text" class="form-control" name="alamat"><br>

    <button type="submit" class="btn btn-primary" name="proses">Simpan Data</button>
</form>

</body>
</html>
