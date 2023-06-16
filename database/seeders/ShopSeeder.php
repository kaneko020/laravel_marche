<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'テスト店舗',
                'information' => '店舗情報テストです。店舗情報テストです。店舗情報テストです。',
                'filename' => 'store1.png',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => '店名2',
                'information' => 'ここにお店の情報が入ります',
                'filename' => 'store2.png',
                'is_selling' => true,
            ],
            [
                'owner_id' => 3,
                'name' => '店名3',
                'information' => 'ここにお店の情報が入ります',
                'filename' => 'store3.png',
                'is_selling' => true,
            ],
            [
                'owner_id' => 4,
                'name' => '店名4',
                'information' => 'ここにお店の情報が入ります',
                'filename' => 'store1.png',
                'is_selling' => true,
            ],
            [
                'owner_id' => 5,
                'name' => '店名5',
                'information' => 'ここにお店の情報が入ります',
                'filename' => 'store2.png',
                'is_selling' => true,
            ],
            [
                'owner_id' =>6,
                'name' => '店名6',
                'information' => 'ここにお店の情報が入ります',
                'filename' => 'store3.png',
                'is_selling' => true,
            ],
            [
                'owner_id' => 7,
                'name' => '店名7',
                'information' => 'ここにお店の情報が入ります',
                'filename' => 'store1.png',
                'is_selling' => true,
            ],
        ]);
    }
}
