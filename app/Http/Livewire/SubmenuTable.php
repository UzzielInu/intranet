<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Submenu;

class SubmenuTable extends DataTableComponent
{
    protected $model = Submenu::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Mnemonic", "mnemonic")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),

            Column::make('Acciones', 'acciones')
                ->label(
                    fn ($row, Column $column)  => '<button onclick="location.href = \'/submenu/' . $row->id . '\'"class="py-2 px-3 border rounded-lg"><i class="fa-regular fa-eye text-green-600"></i></button>
                    <button onclick="location.href = \'/submenu/' . $row->id . '/edit\'"class="py-2 px-3 border rounded-full"><i class="fa-solid fa-pen-to-square text-blue-600"></i></button> <button wire:click="destroy(' . $row->id . ')" class="py-2 px-3 border" onclick="return confirm(\'Holis\')"><i class="fa-solid fa-trash b text-red-600"></i></button>'
                )
                ->excludeFromColumnSelect()
                ->html(),
        ];
    }

    public function destroy($id)
    {
        $submenu = Submenu::find($id);
        $submenu->delete();
        return redirect()->route('submenu.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
