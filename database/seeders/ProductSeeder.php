<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            "Áo len",
            "Áo sơ mi",
            "Quần bò",
            "Áo khoác"
        ];
        $cate = [
            "Áo nam",
            "Áo nữ",
            "Quần áo trẻ em"
        ];
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->name = $name[rand(0, 3)] . $i;
            $product->price = rand(100, 1000);
            $product->category = $cate[rand(0,2)];
            $product->desc = "Product desc $i";
            $product->save();
        }
    }
}
