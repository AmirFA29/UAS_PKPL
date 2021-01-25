<?php
// Kasus Pendaftaran Pendadaran
class Pendadaran
{
    function isJumlahSKS($status)
    {
        if ($status >= 144) {
            return TRUE;
        }
    }

    function isKKN($status)
    {
        if ($status >= 65) {
            return TRUE;
        }
    }

    function isTBQ($status)
    {
        if ($status >= 65) {
            return TRUE;
        }
    }

    #Nested if before refactor
    function main($statusSKS, $statusKKN, $statusTBQ)
    {
        if ($this->isJumlahSKS($statusSKS) == TRUE) {
            if ($this->isKKN($statusKKN) == TRUE) {
                if ($this->isTBQ($statusTBQ) == TRUE) {
                    return 'Selamat Anda Berhasil Mendaftar Pendadaran';
                } else {
                    return 'Anda Belum Lulus TBQ';
                }
            } else {
                return 'Nilai KKN Anda Kurang';
            }
        } else {
            return 'SKS Anda Belum Mencukupi';
        }
    }
}

$dadar = new Pendadaran;
$withdrawl = $dadar->main(144, 70, 72);
echo $withdrawl;