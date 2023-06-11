<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'tops1.png',
                'title' => NULL
            ],
            [
                'owner_id' => 1,
                'filename' => 'outer1.png',
                'title' => NULL
            ],
            [
                'owner_id' => 1,
                'filename' => 'pants1.png',
                'title' => NULL
            ],
            [
                'owner_id' => 1,
                'filename' => 'shoes1.png',
                'title' => NULL
            ],
            [
                'owner_id' => 1,
                'filename' => 'roomwear1.png',
                'title' => NULL
            ],
            [
                'owner_id' => 1,
                'filename' => 'bag1.png',
                'title' => NULL
            ],
        ]);
    }
}
