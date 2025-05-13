<?php

require 'koneksi.php';

$sql = "SELECT * FROM member";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f2f2f2;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px 15px;
            border: 1px solid #ccc;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        h1 {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Member</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Instansi</th>
                    <th>Tanggal Aju</th>
                    <th>Surat Aju</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= ++$no ?></td>
                        <td><?= htmlspecialchars($row["nama"]) ?></td>
                        <td><?= htmlspecialchars($row["nisn"]) ?></td>
                        <td><?= htmlspecialchars($row["kelas"]) ?></td>
                        <td><?= htmlspecialchars($row["instansi"]) ?></td>
                        <td><?= htmlspecialchars($row["tanggal_aju"]) ?></td>
                        <td><?= htmlspecialchars($row["surat_aju"]) ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>">Terima </a>/
                            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Tolak</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
