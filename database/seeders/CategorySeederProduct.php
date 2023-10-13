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
                'title' => 'NGŨ CỐC MẸ BẦU',
                'slug' => 'ngu-coc-me-bau',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ],
            [
                'title' => 'NGŨ CỐC LỢI SỮA',
                'slug' => 'ngu-coc-loi-sua',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ],
            [
                'title' => 'SỮA HẠT DINH DƯỠNG',
                'slug' => 'sua-hat-dinh-duong',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ],
            [
                'title' => 'HẠT GRANOLA',
                'slug' => 'hat-granola',
                'created_at' => now(),
                'updated_at' => now(),
                'type'=> 3
            ]
        ];

        DB::table('categories')->insert($data);
    }
}
