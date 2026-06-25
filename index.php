<?php
//Cek error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'databases/database.php';
require_once 'classes/PendaftaranReguler.php';
require_once 'classes/PendaftaranPrestasi.php';
require_once 'classes/PendaftaranKedinasan.php';

$db = (new Database())->connect();

$reguler = new PendaftaranReguler([
    'id_pendaftaran' => 0,
    'nama_calon' => '',
    'asal_sekolah' => '',
    'nilai_ujian' => 0,
    'biayaPendaftaranDasar' => 0,
    'pilihanProdi' => '',
    'lokasiKampus' => ''
]);

$prestasi = new PendaftaranPrestasi(
    0,
    '',
    '',
    0,
    0,
    '',
    ''
);

$kedinasan = new PendaftaranKedinasan(
    0,
    '',
    '',
    0,
    0,
    '',
    ''
);

$dataReguler = $reguler->getDaftarReguler($db);
$dataPrestasi = $prestasi->getDaftarPrestasi($db);
$dataKedinasan = $kedinasan->getDaftarKedinasan($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-4">

    <h4 class="mb-3">Tabel Pendaftaran Reguler</h4>
    <table class="table table-hover table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Prodi</th>
                <th>Kampus</th>
                <th>Biaya Pendaftaran</th>
            </tr>
        </thead>

        <tbody>
            <?php $noReg = 1; ?>
            <?php foreach ($dataReguler as $row): ?>
                <tr>
                    <td><?= $noReg++; ?></td>
                    <td><?= $row['nama_calon']; ?></td>
                    <td><?= $row['asal_sekolah']; ?></td>
                    <td>
                        <span class="badge bg-primary">
                            <?= $row['nilai_ujian']; ?>
                        </span>
                    </td>
                    <td><?= $row['pilihan_prodi']; ?></td>
                    <td><?= $row['lokasi_kampus']; ?></td>
                    <td>
                        <span class="badge bg-success">
                            <?= $row['biaya_pendaftaran_dasar']; ?>

                        </span>
                    </td>
  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
 
    <div class="container mt-4">
    <h4 class="mb-3">Tabel Pendaftaran Prestasi</h4>

    <table class="table table-hover table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Prodi</th>
                <th>Kampus</th>
                <th>Biaya Pendaftaran</th>
            </tr>
        </thead>

        <tbody>
            <?php $noPre = 1; ?>
            <?php foreach ($dataPrestasi as $row): ?>
                <tr>
                    <td><?= $noPre++; ?></td>
                    <td><?= $row['nama_calon']; ?></td>
                    <td><?= $row['asal_sekolah']; ?></td>
                    <td>
                        <span class="badge bg-primary">
                            <?= $row['nilai_ujian']; ?>
                        </span>
                    </td>
                    <td><?= $row['pilihan_prodi']; ?></td>
                    <td><?= $row['lokasi_kampus']; ?></td>
                    <td>
                        <span class="badge bg-success">
                            <?= $row['biaya_pendaftaran_dasar']; ?>

                        </span>
                    </td>
  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
    <div class="container mt-4">
    <h4 class="mb-3">Tabel Pendaftaran Kedinasan</h4>

    <table class="table table-hover table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Prodi</th>
                <th>Kampus</th>
                <th>Biaya Pendaftaran</th>
            </tr>
        </thead>

        <tbody>
            <?php $noKed = 1; ?>
            <?php foreach ($dataKedinasan as $row): ?>
                <tr>
                    <td><?= $noKed++; ?></td>
                    <td><?= $row['nama_calon']; ?></td>
                    <td><?= $row['asal_sekolah']; ?></td>
                    <td>
                        <span class="badge bg-primary">
                            <?= $row['nilai_ujian']; ?>
                        </span>
                    </td>
                    <td><?= $row['pilihan_prodi']; ?></td>
                    <td><?= $row['lokasi_kampus']; ?></td>
                    <td>
                        <span class="badge bg-success">
                            <?= $row['biaya_pendaftaran_dasar']; ?>

                        </span>
                    </td>
  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   </div> 
    </div> <!-- tutup tab-pane Kedinasan -->

</div>

</body>
</html>
