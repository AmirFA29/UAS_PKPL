<?php

interface KubusInterface
{
    public function tendensiSentral($sisi);
}

class Volume implements KubusInterface
{
    public function tendensiSentral($sisi)
    {
        echo 'Volume : ' . ($sisi * $sisi * $sisi);
    }
}

class Luas implements KubusInterface
{
    public function tendensiSentral($sisi)
    {
        echo 'Luas : ' . (6 * ($sisi * $sisi));
    }
}

class NoTendensiSentral implements KubusInterface
{
    public function tendensiSentral($sisi)
    {
        echo 'Anda tidak memilih.';
    }
}

class Kubus
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'volume':
                return new Volume;
            case 'luas':
                return new Luas;
            default:
                return new NoTendensiSentral;
        }
    }
}

$sisi = 5;
Kubus::tendensiSentralUntuk('volume')->tendensiSentral($sisi);
echo '<br>';
Kubus::tendensiSentralUntuk('luas')->tendensiSentral($sisi);