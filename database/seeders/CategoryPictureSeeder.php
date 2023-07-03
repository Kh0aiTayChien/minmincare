<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPictureSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'title' => 'ảnh slide pc 01',
                'slug' => 'anh-slide-pc-01',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
