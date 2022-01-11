<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Ruang extends Seeder
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
                'id_gedung' => 2,
                'name' => "B2",
                'id_user' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id_gedung' => 1,
                'name' => "A2",
                'id_user' => 3,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id_gedung' => 1,
                'name' => "A1",
                'id_user' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id_gedung' => 2,
                'name' => "B1",
                'id_user' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id_gedung' => 23,
                'name' => "Ruang LPM",
                'id_user' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id_gedung' => 23,
                'name' => "Ruang LPPM",
                'id_user' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('ruangs')->insert($posts);
    }
}
