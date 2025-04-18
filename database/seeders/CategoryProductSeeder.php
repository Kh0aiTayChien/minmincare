<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryProductSeeder extends Seeder
{
    /**
     * Chèn các danh mục sản phẩm (type = 3), title viết HOA,
     * slug không dấu nối bởi dấu “-”.
     * php artisan db:seed --class=CategoryProductSeeder
     */
    public function run()
    {
        $products = [
            [
                'title'      => 'CHĂM SÓC NHÀ CỬA',
                'slug'       => 'cham-soc-nha-cua',
                'created_at' => now(),
                'updated_at' => now(),
                'type'       => 3,
            ],
            [
                'title'      => 'CHĂM SÓC TÓC',
                'slug'       => 'cham-soc-toc',
                'created_at' => now(),
                'updated_at' => now(),
                'type'       => 3,
            ],
            [
                'title'      => 'CHĂM SÓC DA',
                'slug'       => 'cham-soc-da',
                'created_at' => now(),
                'updated_at' => now(),
                'type'       => 3,
            ],
        ];

        DB::table('categories')->insert($products);
    }
}
