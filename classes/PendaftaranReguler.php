<?php

class PendaftaranReguler extends Pendaftaran
{
    private $pilihanProdi;
    private $lokasiKampus;

        public function __construct
      (
            $id_pendaftaran,
            $nama_calon,
            $asal_sekolah,
            $nilai_ujian,
            $biayaPendaftaranDasar,
            $pilihanProdi,
            $lokasiKampus
        ) 
        {
        parent::__construct
        (
            $id_pendaftaran,
            $nama_calon,
            $asal_sekolah,
            $nilai_ujian,
            $biayaPendaftaranDasar
        );

            $this->pilihanProdi = $pilihanProdi;
            $this->lokasiKampus = $lokasiKampus;
        }

    //Getter
    public function getpilihanProdi() 
    {
        return $this->pilihanProdi;
    }
    public function getlokasiKampus() 
    {
        return $this->lokasiKampus;
    }

    //Setter
    public function setpilihanProdi($pilihanProdi) 
    {
        $this->pilihanProdi = $pilihanProdi;
    }
    public function setlokasiKampus($lokasiKampus) 
    {
        $this->lokasiKampus = $lokasiKampus;
    }

    //override
    public function hitungTotalBiaya()
    {
        return $this->biayaPendaftaranDasar;
    }

    //override
        public function tampilkanInfoJalur()
    {
        return "Reguler | Prodi: {$this->pilihanProdi} | Kampus: {$this->lokasiKampus}";
    }

    public function getDaftarReguler($db)
    {
    $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
    $result = $db->query($query);

    $data = [];

    if ($result) 
        {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

    return $data;
    }

}

?>