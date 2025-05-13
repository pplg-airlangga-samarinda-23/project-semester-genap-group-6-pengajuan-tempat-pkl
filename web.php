<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>who knows</title>
    <link rel="stylesheet" href="web.css">
</head>
<body>
    <div class="container">
        <h1>Pengajuan Tempat PKL</h1>
        <form action="#" method="POST">
            <label for="namasiswa">Nama Siswa</label>
            <input type="text" id="namasiswa" name="namasiswa" placeholder="Masukkan nama siswa" required>

            <label for="perusahaan">Nama Perusahaan/Instansi</label>
            <input type="text" id="perusahaan" name="perusahaan" placeholder="Masukkan nama perusahaan/instansi" required>

            <label for="penempatan">Bagian Penempatan</label>
            <input type="text" id="penempatan" name="penempatan" placeholder="Masukkan bagian penempatan" required>

            <label for="tugas">Tugas-Tugas</label>
            <input id="tugas" name="tugas" placeholder="Masukkan daftar tugas" required>

            <button href="web2.html" class="tombol" type="submit">Kirim Pengajuan</button>
        </form>
    </div>
    <div class="container">
        <h1>Status Pengajuan</h1>
        <p id="status-message">Menunggu persetujuan</p>
        <button class="tombol" id="resubmit-button" onclick="ajukanUlang()">Ajukan Ulang</button>
    </div>
    <script>
        function ajukanUlang() {
            document.getElementById('status-message').innerText = 'Silakan lengkapi data untuk pengajuan ulang';
        }
    </script>
    </div>
    <a href="web2.html"><button style="cursor: pointer;">slide 2</button></a>
</body>
</html>
