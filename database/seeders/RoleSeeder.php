<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'description' => 'Administrator with full access'],
            ['name' => 'cashier', 'description' => 'jadi kasir aja'],
            ['name' => 'chef', 'description' => 'memasak didapur aja'],
            ['name' => 'customer', 'description' => 'pembeli adalah raja bos'],
        ];

        DB::table('roles')->insert($roles);
    }
}
