<?php

require_once 'Pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran
{
    private $jenisPrestasi;
    private $tingkatPrestasi;

    public function __construct(
        $id_pendaftaran,
        $nama_calon,
        $asal_sekolah,
        $nilai_ujian,
        $biayaPendaftaranDasar,
        $jenisPrestasi,
        $tingkatPrestasi
    ) {
        parent::__construct(
            $id_pendaftaran,
            $nama_calon,
            $asal_sekolah,
            $nilai_ujian,
            $biayaPendaftaranDasar
        );

        $this->jenisPrestasi = $jenisPrestasi;
        $this->tingkatPrestasi = $tingkatPrestasi;
    }

    // Getter
    public function getJenisPrestasi()
    {
        return $this->jenisPrestasi;
    }

    public function getTingkatPrestasi()
    {
        return $this->tingkatPrestasi;
    }

    // Setter
    public function setJenisPrestasi($jenisPrestasi)
    {
        $this->jenisPrestasi = $jenisPrestasi;
    }

    public function setTingkatPrestasi($tingkatPrestasi)
    {
        $this->tingkatPrestasi = $tingkatPrestasi;
    }

    // override abstract method
    public function hitungTotalBiaya()
    {
        $total = $this->biayaPendaftaranDasar - 50000;
        return ($total < 0) ? 0 : $total;
    }

    public function tampilkanInfoJalur()
    {
        return "Prestasi | Jenis: {$this->jenisPrestasi} | Tingkat: {$this->tingkatPrestasi}";
    }

    public function getDaftarPrestasi($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $result = $db->query($query);

        $data = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
}

?>