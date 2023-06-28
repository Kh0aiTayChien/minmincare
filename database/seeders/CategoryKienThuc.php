<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryKienThuc extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'kiến thức-mẹ bầu',
                'slug' => 'kien-thuc-me-bau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'kiến thức-mẹ sau sinh',
                'slug' => 'kien-thuc-me-sau-sinh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'kiến thức-dinh dưỡng cho con',
                'slug' => 'kien-thuc-dinh-duong-cho-con',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
