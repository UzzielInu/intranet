<?php

namespace Database\Seeders;

use App\Models\Submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdministrativeUnit;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Submenu::create(['name' => 'UNIDAD DE GENERO', 'mnemonic' => 'UG', 'administrative_unit_id' => '1',]);
        Submenu::create(['name' => 'UNIDAD DE TRANSPARENCIA', 'mnemonic' => 'UT', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'ARCHIVO', 'mnemonic' => 'ARC', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA JURÍDICA', 'mnemonic' => 'JJ', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'SUBCOORDINACION ADMINISTRATIVA ', 'mnemonic' => 'SA', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE RECURSOS HUMANOS', 'mnemonic' => 'RH', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE RECURSOS FINANCIEROS', 'mnemonic' => 'RE', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'PROGRAMACIÓN Y PRESUPUESTO', 'mnemonic' => 'PYP', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE INFRAESTRUCTURA Y ADQUISICIONES', 'mnemonic' => 'IA', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'SUBCOORDINACIÓN DE SERVICIOS INSTITUCIONALES', 'mnemonic' => 'SSI', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA SERVICIOS ESCOLARES', 'mnemonic' => 'SE', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA CAPACITACIÓN Y EVALUACIÓN OE COMPETENCIAS', 'mnemonic' => 'CAP', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE PROMOCIÓN Y VINCULACIÓN', 'mnemonic' => 'PV', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE FORMACION TÉCNICA', 'mnemonic' => 'FT', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'SUBCOORDINACIÓN DE PLANEACIÓN Y DESARROLLO INSTITUCIONAL', 'mnemonic' => 'SPDI', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE CALIDAD EDUCATIVA', 'mnemonic' => 'CE', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE PLANEACIÓN Y EVALUACIÓN INSTITUCIONAL', 'mnemonic' => 'PEI', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'INFRAESTRUCTURA EDUCATIVA', 'mnemonic' => 'IE', 'administrative_unit_id' => '1']);
        Submenu::create(['name' => 'JEFATURA DE TECNOLOGÍAS APLICADAS', 'mnemonic' => 'TA', 'administrative_unit_id' => '1']);

        $administrativeUnits = AdministrativeUnit::whereIn('name', [
            'VERACRUZ', 'DON JUAN OSORIO LOPEZ', 'POTRERO', 'JUAN DIAZ COVARRUBIAS', 'DR. GONZALO AGUIRRE BELTRAN',
            'VERACRUZ II', 'MANUEL RIVERA CAMBAS', 'LIC. JESUS REYES HEROLES', 'POZA RICA', 'DR. GUILLERMO FIGUEROA CARDENAS', 'MANUEL MAPLES ARCE', 'ORIZABA', 'VEGA DE ALATORRE',
            'ALAMO', 'CÓRDOBA', 'CAST COATZACOALCOS'
        ])->get();
        foreach ($administrativeUnits as $administrativeUnit) {
            Submenu::create(['name' => 'DIRECCIÓN', 'mnemonic' => 'DIR', 'administrative_unit_id' => $administrativeUnit->id]);
            Submenu::create(['name' => 'JEFATURA DE SERVICIOS ADMINISTRATIVOS', 'mnemonic' => 'SA', 'administrative_unit_id' => $administrativeUnit->id]);
            Submenu::create(['name' => 'JEFATURA DE INFORMATICA', 'mnemonic' => 'INF', 'administrative_unit_id' => $administrativeUnit->id]);
            Submenu::create(['name' => 'JEFATURA SERVICIOS ESCOLARES', 'mnemonic' => 'SE', 'administrative_unit_id' => $administrativeUnit->id]);
            Submenu::create(['name' => 'JEFATURA CAPACITACIÓN Y EVALUACIÓN OE COMPETENCIAS', 'mnemonic' => 'CAP', 'administrative_unit_id' => $administrativeUnit->id]);
            Submenu::create(['name' => 'JEFATURA DE PROMOCIÓN Y VINCULACIÓN', 'mnemonic' => 'PV', 'administrative_unit_id' => $administrativeUnit->id]);
            Submenu::create(['name' => 'JEFATURA DE FORMACION TÉCNICA', 'mnemonic' => 'FT', 'administrative_unit_id' => $administrativeUnit->id]);
        }
    }
}
