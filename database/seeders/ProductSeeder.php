<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Samsung tv',
            'price' => '84000',
            'description' => '64 inch smart tv',
            'category' => 'tv',
            'image' => 'https://estore.fdl.com.bd/media/catalog/product/cache/3/image/650x/0ad846fdeb44c0dc049c18f21d475e9b/t/u/tu8000_uth1__001_left.jpg',

        ],
        [
            'name' => 'Oneplus 8',
            'price' => '58000',
            'description' => '128gb black color',
            'category' => 'Mobile',
            'image' => 'https://fdn.gsmarena.com/imgroot/news/20/04/oneplus-8-pro-official-images/-1600x1200m/gsmarena_009.jpg',

        ],
        [
            'name' => 'Samsung s20',
            'price' => '108000',
            'description' => '128g grey color',
            'category' => 'Mobile',
            'image' => 'https://img.router-switch.com/media/customoptions/options/396/1689/samsung-galaxy-s20-ultra-5g-sm-g9880-gray.jpg',

        ]
    );
    }
}
