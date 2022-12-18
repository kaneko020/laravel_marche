<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'テスト',
            'email' => 'test@test.com',
            'password' => Hash::make('test1111'),
            'created_at' => '2022/12/16 19:21:22',
        ]);
    }
}
