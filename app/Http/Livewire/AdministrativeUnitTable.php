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
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Local id", "local_id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Mnemonic", "mnemonic")
                ->sortable(),
            Column::make("Type", "type")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Acciones')
                ->label(
                    fn ($row, Column $column)  => '<button class="px-4 py-2 font-semibold text-sm bg-cyan-500 dark:bg-cyan-500 text-white rounded-full shadow-sm"><i class="fa-solid fa-cart-shopping"></i></button>
                    <button wire:click="destroy(' . $row->id . ')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="return confirm(\'Holis\')"><i class="fa-solid fa-star"></i></button>'
                )
                ->html(),
        ];
    }

    public function destroy($id)
    {
        $adminUnit = AdministrativeUnit::find($id);
        $adminUnit->delete();
        return redirect()->route('administrativeUnit.index')->with('success', 'Usuario eliminado exitosamente');
    }
}

