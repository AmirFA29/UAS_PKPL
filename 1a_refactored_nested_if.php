<?php
// Kasus Pendaftaran Pendadaran
class Pendadaran
{
    function isJumlahSKS($status)
    {
        if ($status < 144) {
            return TRUE;
        }
    }

    function isKKN($status)
    {
        if ($status < 65) {
            return TRUE;
        }
    }

    function isTBQ($status)
    {
        if ($status < 65) {
            return TRUE;
        }
    }

    #Nested If After Refactored
    function main($statusSKS, $statusKKN, $statusTBQ)
    {
        if ($this->isJumlahSKS($statusSKS) == TRUE) {
            return 'SKS Anda Belum Mencukupi';
        }
        if ($this->isKKN($statusKKN) == TRUE) {
            return 'Nilai KKN Anda Kurang';
        }
        if ($this->isTBQ($statusTBQ) == TRUE) {
            return 'Anda Belum Lulus TBQ';
        }

        return 'Selamat Anda Berhasil Mendaftar Pendadaran';
    }
}

$dadar = new Pendadaran;
$withdrawl = $dadar->main(144, 70, 72);
echo $withdrawl;