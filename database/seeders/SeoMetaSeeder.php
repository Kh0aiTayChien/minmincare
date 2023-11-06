<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoMetaSeeder extends Seeder
{
    public function run()
    {
        DB::table('seo_meta')->insert([
            'title' => 'MinMinCare',
            'description' => 'Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.',
            'canonical_url' => 'https://minmincare.com.vn/',
            'og_description' => 'Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.',
            'og_title' => 'MinMinCare',
            'og_url' => 'https://minmincare.com.vn/',
            'og_type' => 'homepage',
            'og_image' => '',
            'twitter_title' => 'MinMinCare',
            'twitter_site' => '',
            'jsonld_description' => 'Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.',
            'jsonld_image' => ''
        ]);
    }
}
