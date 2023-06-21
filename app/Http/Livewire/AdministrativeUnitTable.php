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
        $this->setTdAttributes(function(Column $column, $row, $columnIndex, $rowIndex) {
            if ($column->isField('acciones')) {
              return [
                'default' => false,
                'class' => 'bg-red-500 dark:text-red-400',
              ];
            }
        
            return [];
          });
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
            Column::make('Acciones', 'acciones')
                ->label(
                    fn ($row, Column $column)  => '<button onclick="location.href = \'/administrativeUnit/'.$row->id .'\'"class="py-2 px-3 border rounded-lg"><i class="fa-regular fa-eye text-green-600"></i></button>
                    <button onclick="location.href = \'/administrativeUnit/'.$row->id .'/edit\'"class="py-2 px-3 border rounded-full"><i class="fa-solid fa-pen-to-square text-blue-600"></i></button> <button wire:click="destroy(' . $row->id . ')" class="py-2 px-3 border" onclick="return confirm(\'Holis\')"><i class="fa-solid fa-trash b text-red-600"></i></button>'
                ) 
                ->excludeFromColumnSelect()
                ->html(),
        ];
    }

    public function destroy($id)
    {
        $administrativeUnit = AdministrativeUnit::find($id);
        $administrativeUnit->delete();
        return redirect()->route('administrativeUnit.index')->with('success', 'Usuario eliminado exitosamente');
    }
}

