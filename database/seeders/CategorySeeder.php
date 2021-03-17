<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Category as Category;

class CategorySeeder extends Seeder
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
            Category::create(
                [
                    'id' => $i + 1,
                    'name' => "Category " . $i,
                ]
            );
        };

        Schema::enableForeignKeyConstraints();
    }
}
