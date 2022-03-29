<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\User;
use App\Models\History;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(3)->create();
        
        History::factory(3)->create();

        Dokter::create([
            'nama' => 'Nur Hidayati',
            'spesialis' => 'THT'
        ]);

        Pasien::create([
            'nama' => 'Naila',
            'alamat' => 'Surabaya'
        ]);
    }
}
