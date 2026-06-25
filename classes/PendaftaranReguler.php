<?php

require_once 'Pendaftaran.php';

class PendaftaranReguler extends Pendaftaran
{
    private $pilihanProdi;
    private $lokasiKampus;

       public function __construct($data)
{
    parent::__construct(
        $data['id_pendaftaran'],
        $data['nama_calon'],
        $data['asal_sekolah'],
        $data['nilai_ujian'],
        $data['biayaPendaftaranDasar']
    );

    $this->pilihanProdi = $data['pilihanProdi'];
    $this->lokasiKampus = $data['lokasiKampus'];
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