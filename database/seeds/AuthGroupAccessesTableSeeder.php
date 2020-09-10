<?php

use Illuminate\Database\Seeder;

class AuthGroupAccessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('auth_group_accesses')->delete();
        
        \DB::table('auth_group_accesses')->insert(array (
            0 => 
            array (
                'uid' => 1,
                'group_id' => 1,
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
        ));
        
        
    }
}