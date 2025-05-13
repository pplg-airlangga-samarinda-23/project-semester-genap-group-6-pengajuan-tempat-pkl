<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $instansi = $_POST['instansi'];
    $tanggal = $_POST['tanggal_aju'];
    $surat = $_POST['surat_aju'];

    $sql ="INSERT INTO list (nama, nisn, kelas, instansi, tanggal, surat) VALUES (?, ?, ?, ?, ?, ?)";
    $row = $koneksi->execute_query($sql, [$nama, $nisn, $kelas, $instansi, $tanggal, $surat]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ajuan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 320px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }
        form select {
            width: 106%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>

        <label for="nisn">NISN</label>
        <input type="text" name="nisn" id="nisn" required>

        <label for="kelas">kelas</label>
            <select name="kelas" id="kelas" required>
                <option value="pplg">12 PPlG</option>
                <option value="dkv">12 DKV</option>
                <option value="tjkt">12 TJKT</option>
                <option value="mplb">12 MPLB</option>
            </select>

        <label for="instansi">Instansi</label>
        <input type="text" name="instansi" id="instansi" required>

        <label for="tanggal_aju">Tanggal Aju</label>
        <input type="date" name="tanggal_aju" id="tanggal_aju" required>

        <label for="surat_aju">Surat Aju</label>
        <input type="file" name="surat_aju" id="surat_aju">

        <button type="submit">Kirim</button>
    </form>
</body>
</html>