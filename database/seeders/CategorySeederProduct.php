<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeederProduct extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'NGŨ CỐC',
                'slug' => 'ngu-coc',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ],
            [
                'title' => 'SỮA HẠT',
                'slug' => 'sua-hat',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ],
            [
                'title' => 'HẠT',
                'slug' => 'hat',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
