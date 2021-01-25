<?php

class Kubus
{
    public function volume($sisi)
    {
        echo 'Volume : ' . ($sisi * $sisi * $sisi);
    }

    public function luas($sisi)
    {
        echo 'Luas : ' . (6 * ($sisi * $sisi));
    }

    public function noChoice($sisi)
    {
        echo 'Anda tidak memilih.';
    }

    public function tendensiSentralUntuk($tendensiSentral, $sisi)
    {
        switch ($tendensiSentral) {
            case 'volume':
                $this->volume($sisi);
            case 'luas permukaan':
                $this->luasPermukaan($sisi);
            default:
                $this->noChoice($sisi);
        }
    }
}

$sisi = 5;
$tendensiSentral = new Kubus;
$tendensiSentral->tendensiSentralUntuk('volume', $sisi);