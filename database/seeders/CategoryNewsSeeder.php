<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryNewsSeeder extends Seeder
{
    /**
     * Chèn các danh mục tin tức (type = 1), title viết thường,
     * slug không dấu nối bởi dấu “-”.
     * php artisan db:seed --class=CategoryNewsSeeder
     */
    public function run()
    {
        $news = [
            [
                'title'      => 'chăm sóc nhà cửa',
                'slug'       => 'cham-soc-nha-cua',
                'created_at' => now(),
                'updated_at' => now(),
                'type'       => 1,
            ],
            [
                'title'      => 'chăm sóc tóc',
                'slug'       => 'cham-soc-toc',
                'created_at' => now(),
                'updated_at' => now(),
                'type'       => 1,
            ],
            [
                'title'      => 'chăm sóc da',
                'slug'       => 'cham-soc-da',
                'created_at' => now(),
                'updated_at' => now(),
                'type'       => 1,
            ],
        ];

        DB::table('categories')->insert($news);
    }
}
