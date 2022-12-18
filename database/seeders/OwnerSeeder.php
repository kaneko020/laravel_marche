<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'テスト1',
                'email' => 'test1@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/17 11:37:42',
            ],
            [
                'name' => 'テスト2',
                'email' => 'test2@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/17 15:15:36',
            ],
            [
                'name' => 'テスト3',
                'email' => 'test3@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/17 16:34:54',
            ],
            [
                'name' => 'テスト4',
                'email' => 'test4@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/18 09:11:39',
            ],
            [
                'name' => 'テスト5',
                'email' => 'test5@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/18 11:02:07',
            ],
            [
                'name' => 'テスト6',
                'email' => 'test6@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/18 13:14:38',
            ],
            [
                'name' => 'テスト7',
                'email' => 'test7@test.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022/12/18 14:50:43',
            ],
        ]);
    }
}
