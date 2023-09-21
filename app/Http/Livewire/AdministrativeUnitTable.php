<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AdministrativeUnit;

class AdministrativeUnitTable extends DataTableComponent
{
    protected $model = AdministrativeUnit::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id")
                ->sortable(),
            Column::make("Número Unidad", "local_id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            // Column::make("Mnemonico", "mnemonic"),
            Column::make("Tipo", "type")
                ->sortable(),
            Column::make("Fecha Creación", "created_at")
                ->sortable(),
            Column::make('Acciones', 'acciones')
                ->label(
                    fn ($row)  => '<button onclick="location.href = \'/administrativeUnit/'.$row->id .'\'"class="py-2 px-3 border rounded-lg"><i class="fa-regular fa-eye text-green-600"></i></button>
                    <button onclick="location.href = \'/administrativeUnit/'.$row->id .'/edit\'"class="py-2 px-3 border rounded-full"><i class="fa-solid fa-pen-to-square text-blue-600"></i></button> <button wire:click="destroy(' . $row->id . ')" class="py-2 px-3 border""><i class="fa-solid fa-trash b text-red-600"></i></button>'
                ) 
                ->excludeFromColumnSelect()
                ->html(),
        ];
    }

    public function destroy($id)
    {
        $administrativeUnit = AdministrativeUnit::find($id);
        $administrativeUnit->delete();
        return redirect()->route('administrativeUnit.index')->with('success', 'Unidad Administrativa eliminada exitosamente');
    }
}

