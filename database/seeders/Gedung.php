<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Gedung extends Seeder
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
                'name' => "Gedung A",
                'id_unit' => 6,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => "Gedung B",
                'id_unit' => 6,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => "Gedung C",
                'id_unit' => 6,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'name' => "Gedung D",
                'id_unit' => 6,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'name' => "Gedung E",
                'id_unit' => 4,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'name' => "Gedung F",
                'id_unit' => 4,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'name' => "Gedung G",
                'id_unit' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'name' => "Gedung H",
                'id_unit' => 4,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'name' => "Gedung I",
                'id_unit' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'name' => "Gedung J",
                'id_unit' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'name' => "Gedung K",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'name' => "Gedung L",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'name' => "Gedung M",
                'id_unit' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 14,
                'name' => "Gedung N",
                'id_unit' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 15,
                'name' => "Gedung O",
                'id_unit' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 16,
                'name' => "Gedung P",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 17,
                'name' => "Gedung Q",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 18,
                'name' => "Gedung R",
                'id_unit' => 3,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 19,
                'name' => "Gedung S",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 20,
                'name' => "Gedung T",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 21,
                'name' => "Gedung U",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 22,
                'name' => "Gedung V",
                'id_unit' => 2,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 23,
                'name' => "Gedung Perpustakaan",
                'id_unit' => 9,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('gedungs')->insert($posts);
    }
}
