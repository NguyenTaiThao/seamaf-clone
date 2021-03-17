<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            Product::create(
                [
                    'id' => $i + 1,
                    'name' => "Product " . $i,
                    'code' => Hash::make($i + 1),
                    'category_id' => $i % 19 + 1,
                    'discription' => "Discription " . strval($i),
                    'price' => 3 + $i,
                    'is_top' => $i % 4 ? 1 : 0,
                    'on_sale' => $i % 3 ? 1 : 0,
                ]
            );
        };

        Schema::enableForeignKeyConstraints();
    }
}
