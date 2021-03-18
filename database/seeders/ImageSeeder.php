<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ImageSeeder extends Seeder
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
            Image::create(
                [
                    'path' => 'products/' . strval($i % 10) . ".jpg",
                    'product_id' => $i % 20 + 1,
                ]
            );
        };

        Schema::enableForeignKeyConstraints();
    }
}
