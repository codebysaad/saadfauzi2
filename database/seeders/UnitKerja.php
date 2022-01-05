<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitKerja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id' => 1,
                'name' => "Rektorat",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => "Fakultas Tarbiyah",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => "Fakultas Syariah",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'name' => "FEBI",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'name' => "Fakultas Ushuluddin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'name' => "FDKI",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'name' => "LPM",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'name' => "LPPM",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'name' => "UPT Perpustakan",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'name' => "UPT TIPD",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'name' => "UPT Ma'had",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'name' => "UPT Bahasa",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('unit_kerjas')->insert($posts);
    }
}
