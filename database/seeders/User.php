<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Saad Fauzi',
			   'username'=>'saadfauzi',
               'email'=>'saadfauzi@gmail.com',
               'role'=>'root',
               'password'=> bcrypt('root123'),
			   'id_unit'=>'1',
			   'position'=>'CEO',
            ],
            [
               'name'=>'Debian',
			   'username'=>'debian',
               'email'=>'debian@gmail.com',
               'role'=>'admin',
               'password'=> bcrypt('admin123'),
			   'id_unit'=>'1',
			   'position'=>'Manager',
            ],
            [
                'name'=>'Dzaky Nararya A',
                'username'=>'dzaky',
                'email'=>'dzaky@gmail.com',
                'role'=>'pengelola',
                'password'=> bcrypt('pengelola123'),
                'id_unit'=>'1',
                'position'=>'Direktur',
             ],
             [
                'name'=>'Puji Astuti',
                'username'=>'pujia',
                'email'=>'pujia@gmail.com',
                'role'=>'user',
                'password'=> bcrypt('user123'),
                'id_unit'=>'1',
                'position'=>'SPV',
             ],
        ];

        \DB::table('users')->insert($userData);
    }
}
