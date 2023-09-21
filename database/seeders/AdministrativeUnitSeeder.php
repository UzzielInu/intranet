<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdministrativeUnit;

class AdministrativeUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdministrativeUnit::create(['local_id' => '524','name' => 'DIRECCION GENERAL','mnemonic' => 'DG','type' => 'DG',]);
        AdministrativeUnit::create(['local_id' => '57','name' => 'VERACRUZ','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '58','name' => 'DON JUAN OSORIO LOPEZ','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '103','name' => 'POTRERO','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '104','name' => 'JUAN DIAZ COVARRUBIAS','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '122','name' => 'DR. GONZALO AGUIRRE BELTRAN','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '144','name' => 'VERACRUZ II','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '162','name' => 'MANUEL RIVERA CAMBAS','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '165','name' => 'LIC. JESUS REYES HEROLES','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '177','name' => 'POZA RICA','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '201','name' => 'DR. GUILLERMO FIGUEROA CARDENAS','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '244','name' => 'MANUEL MAPLES ARCE','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '252','name' => 'ORIZABA','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '320','name' => 'VEGA DE ALATORRE','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '337','name' => 'ALAMO','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '338','name' => 'CÓRDOBA','mnemonic' => '','type' => 'P',]);
        AdministrativeUnit::create(['local_id' => '708','name' => 'CAST COATZACOALCOS','mnemonic' => '','type' => 'P',]);
    }
}
