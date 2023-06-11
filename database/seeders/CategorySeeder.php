<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'レディース',
                'sort_order' => 1,
            ],
            [
                'name' => 'メンズ',
                'sort_order' => 2,
            ],
            [
                'name' => 'ベビー・キッズ',
                'sort_order' => 3,
            ],
            [
                'name' => 'その他',
                'sort_order' => 4,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'primary_category_id' => 1,
                'name' => 'トップス',
                'sort_order' => 1,
            ],
            [
                'primary_category_id' => 1,
                'name' => 'アウター',
                'sort_order' => 2,
            ],
            [
                'primary_category_id' => 1,
                'name' => 'パンツ',
                'sort_order' => 3,
            ],
            [
                'primary_category_id' => 1,
                'name' => '靴',
                'sort_order' => 4,
            ],
            [
                'primary_category_id' => 1,
                'name' => 'ルームウェア/パジャマ',
                'sort_order' => 5,
            ],
            [
                'primary_category_id' => 1,
                'name' => 'バッグ',
                'sort_order' => 6,
            ],
            [
                'primary_category_id' => 2,
                'name' => 'トップス',
                'sort_order' => 1,
            ],
            [
                'primary_category_id' => 2,
                'name' => 'アウター',
                'sort_order' => 2,
            ],
            [
                'primary_category_id' => 2,
                'name' => 'パンツ',
                'sort_order' => 3,
            ],
            [
                'primary_category_id' => 2,
                'name' => '靴',
                'sort_order' => 4,
            ],
            [
                'primary_category_id' => 2,
                'name' => 'ルームウェア/パジャマ',
                'sort_order' => 5,
            ],
            [
                'primary_category_id' => 2,
                'name' => 'バッグ',
                'sort_order' => 6,
            ],
        ]);
    }
}
