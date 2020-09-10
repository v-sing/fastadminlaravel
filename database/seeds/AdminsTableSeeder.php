<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'nickname' => 'Admin',
                'password' => '$2y$10$uBp3ehpCdp8SBD4szt1lqu2fBU0Y9fpc21A3vNqvjOe9LPTBYVmX6',
                'salt' => 'eb8e4c',
                'avatar' => '/assets/img/avatar.png',
                'email' => 'admin@admin.com',
                'loginfailure' => 0,
                'logintime' => 1594171731,
                'token' => '31b0ea63-ae42-49e5-b126-651e443fe1d7',
                'status' => 'normal',
                'panterid' => 'FFFFFFFF',
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
        ));
        
        
    }
}