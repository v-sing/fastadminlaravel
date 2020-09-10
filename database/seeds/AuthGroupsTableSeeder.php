<?php

use Illuminate\Database\Seeder;

class AuthGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('auth_groups')->delete();
        
        \DB::table('auth_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pid' => 0,
                'name' => 'Admin group',
                'rules' => '*',
                'status' => 'normal',
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
            1 => 
            array (
                'id' => 2,
                'pid' => 1,
                'name' => 'Second group',
                'rules' => '13,14,16,15,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,1,9,10,11,7,6,8,2,4,5',
                'status' => 'normal',
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
            2 => 
            array (
                'id' => 3,
                'pid' => 2,
                'name' => 'Third group',
                'rules' => '1,4,9,10,11,13,14,15,16,17,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,5',
                'status' => 'normal',
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
            3 => 
            array (
                'id' => 4,
                'pid' => 1,
                'name' => 'Second group 2',
                'rules' => '1,4,13,14,15,16,17,55,56,57,58,59,60,61,62,63,64,65',
                'status' => 'normal',
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
            4 => 
            array (
                'id' => 5,
                'pid' => 2,
                'name' => 'Third group 2',
                'rules' => '1,2,6,7,8,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34',
                'status' => 'normal',
                'created_at' => '2020-07-08 01:28:51',
                'updated_at' => '2020-07-08 01:28:51',
            ),
        ));
        
        
    }
}