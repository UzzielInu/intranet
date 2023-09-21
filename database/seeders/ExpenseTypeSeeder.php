<?php

namespace Database\Seeders;

use App\Models\ExpenseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExpenseType::create(['name' => 'GASTOS','mnemonic' => 'GTO',]);
        ExpenseType::create(['name' => 'VIÁTICOS','mnemonic' => 'VIA',]);
        ExpenseType::create(['name' => 'NO PRESUPUESTAL','mnemonic' => 'NP',]);
        ExpenseType::create(['name' => 'CAPACITACIÓN','mnemonic' => 'CAP',]);
    }
}
