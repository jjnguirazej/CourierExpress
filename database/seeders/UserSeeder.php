<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'branch_id' => 1,
            'name' => 'Md. Hanif Chowdhury',
            'email' => 'admin@courierexpress.com',
            'username' => 'MHC',
            'gender' => 'Male',
            'password' => bcrypt('@12345'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'branch_id' => 2,
            'name' => 'Edwin Diaz',
            'email' => 'stuff@courierexpress.com',
            'username' => 'ED',
            'gender' => 'Male',
            'password' => bcrypt('@67890'),
        ]);
    }
}
