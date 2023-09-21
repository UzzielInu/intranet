<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdministrativeUnitSeeder::class);
        $this->call(ExpenseTypeSeeder::class);
        $this->call(SubmenuSeeder::class);
    }
}
