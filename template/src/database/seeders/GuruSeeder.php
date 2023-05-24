<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'nama'         => 'ANISA',
                'alamat'       => 'jl. kenanga raya no.1',
                'NIP'          => '123',
                
            ],
            [
                'nama'         => 'ANTON',
                'alamat'       => 'jl. kenanga raya no.5',
                'NIP'          => '1234',
            ],
            [
                'nama'         => 'ARIF',
                'alamat'       => 'jl. kenanga jaya no.3',
                'NIP'          => '12345',
            ],
            [
                'nama'         => 'ALEX',
                'alamat'       => 'jl. MERPATI no.1',
                'NIP'          => '123456',
            ],
            
        ];
        

        Guru::insert($Guru);
    }
}