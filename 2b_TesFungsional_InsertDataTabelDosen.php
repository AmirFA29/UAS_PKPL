<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '060150841',
            'nidn' => '0524118801',
            'nama' => 'Adhi Prahara',
            'jabfung' => 'Asisten Ahli',
            'email_dosen' => 'adhi.prahara@tif.uad.ac.id',
            'avatar' => 'adhiprahara.jpg'
        ]);

        $this->assertEquals('060150841', $dosen->nipy);
        $this->assertEquals('0524118801', $dosen->nidn);
        $this->assertEquals('Adhi Prahara', $dosen->nama);
        $this->assertEquals('Asisten Ahli', $dosen->jabfung);
        $this->assertEquals('adhi.prahara@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('adhiprahara.jpg', $dosen->avatar);
    }
}