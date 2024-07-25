<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Product 1 description',
                'price' => 100,
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a057fzkhxid/gallery/id-galaxy-a05s-sm-a057-sm-a057fzkhxid-538374550?$650_519_PNG$'
            ],
            [
                'name' => 'Product 2',
                'description' => 'Product 2 description',
                'price' => 100,
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a057fzkhxid/gallery/id-galaxy-a05s-sm-a057-sm-a057fzkhxid-538374550?$650_519_PNG$'
            ],
            [
                'name' => 'Product 3',
                'description' => 'Product 3 description',
                'price' => 100,
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a057fzkhxid/gallery/id-galaxy-a05s-sm-a057-sm-a057fzkhxid-538374550?$650_519_PNG$'
            ],
            [
                'name' => 'Product 4',
                'description' => 'Product 4 description',
                'price' => 100,
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a057fzkhxid/gallery/id-galaxy-a05s-sm-a057-sm-a057fzkhxid-538374550?$650_519_PNG$'
            ]
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
