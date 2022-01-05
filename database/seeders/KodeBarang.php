<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KodeBarang extends Seeder
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
                'id' => 3100102002,
                'name' => "Laptop",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3100102001,
                'name' => "PC Unit",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3100203006,
                'name' => "Printer",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3100203004,
                'name' => "Scanner",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 8010101067,
                'name' => "Software Komputer",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3050201577,
                'name' => "Kursi Besi",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3050201008,
                'name' => "Meja Rapat",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('kode_barangs')->insert($posts);
    }
}
