<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
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
            User::create(
                [
                    'id' => $i + 1,
                    'name' => "Nguyen Tai Thao " . $i,
                    'password' => bcrypt("12345678"),
                    'is_admin' => $i % 5 ? 1 : 0,
                    'email' => strval($i + 1) . "@gmail.com",
                ]
            );
        };
        Schema::enableForeignKeyConstraints();
    }
}
