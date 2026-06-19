<?php

class PendaftaranPrestasi extends Pendaftaran
{
    private $jenisPrestasi;
    private $tingkatPrestasi;

    public function __construct
      (
            $id_pendaftaran,
            $nama_calon,
            $asal_sekolah,
            $nilai_ujian,
            $biayaPendaftaranDasar,
            $tingkatPrestasi,
            $tingkatPrestasi
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

            $this->jenisPrestasi = $jenisPrestasi;
            $this->tingkatPrestasi = $tingkatPrestasi;
        }

    //Getter
    public function getjenisPrestasi() 
    {
        return $this->jenisPrestasi;
    }
    public function gettingkatPrestasi() 
    {
        return $this->tingkatPrestasi;
    }

    //Setter
    public function setjenisPrestasi($jenisPrestasi) 
    {
        $this->jenisPrestasi = $jenisPrestasi;
    }
    public function settingkatPrestasi($tingkatPrestasi) 
    {
        $this->tingkatPrestasi = $tingkatPrestasi;
    }
}

?>