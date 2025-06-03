<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Machine;

class MachineTable extends DataTableComponent
{
    // protected $model = Machine::class;
    public $area_id;

    public function mount($area)
    {
        $this->area_id = $area;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return Machine::query()
            ->where('area_id','=', $this->area_id);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Hp", "hp")
                ->sortable(),
            Column::make("Voltage", "voltage")
                ->sortable(),
            Column::make("Board consumption", "board_consumption")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            // Column::make('Acciones', 'acciones')
            // ->label(
            //     fn ($row)  => '<button onclick="location.href = \'/machine/'.$row->id .'\'"class="py-2 px-3 border rounded-lg"><i class="fa-regular fa-eye text-green-600"></i></button>
            //     <button onclick="location.href = \'/machine/'.$row->id .'/edit\'"class="py-2 px-3 border rounded-full"><i class="fa-solid fa-pen-to-square text-blue-600"></i></button>
            //     <button onclick="validateDelete('.$row->id.',\''.$row->name.'\')" class="py-2 px-3 border""><i class="fa-solid fa-trash b text-red-600"></i></button>'
            // ) 
            // ->excludeFromColumnSelect()
            // ->html(),
        ];
    }
}
