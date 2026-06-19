<?php

class PendaftaranKedinasan extends Pendaftaran
{
    private $skIkatanDinas;
    private $instansiSponsor;

      public function __construct
      (
            $id_pendaftaran,
            $nama_calon,
            $asal_sekolah,
            $nilai_ujian,
            $biayaPendaftaranDasar,
            $skIkatanDinas,
            $instansiSponsor
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

            $this->skIkatanDinas = $skIkatanDinas;
            $this->instansiSponsor = $instansiSponsor;
        }

    //Getter
    public function getinstansiSponsor() 
    {
        return $this->instansiSponsor;
    }
    public function getskIkatanDinas() 
    {
        return $this->skIkatanDinas;
    }

    //Setter
    public function setinstansiSponsor($instansiSponsor) 
    {
        $this->instansiSponsor = $instansiSponsor;
    }
    public function setIkatanDinas($skIkatanDinas) 
    {
        $this->skIkatanDinas = $skIkatanDinas;
    }

}

?>