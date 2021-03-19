<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            Admin::create(
                [
                    'id' => $i + 1,
                    'name' => "Admin " . $i,
                    'email' => 'admin' . strval($i + 1) . "@gmail.com",
                    'password' => Hash::make('12345678'),
                ]
            );
        };

        Schema::enableForeignKeyConstraints();
    }
}
