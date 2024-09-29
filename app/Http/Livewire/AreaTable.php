<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Area;

class AreaTable extends DataTableComponent
{
    // protected $model = Area::class;
    public $company_id;

    public function mount($company)
    {
        $this->company_id = $company;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setEmptyMessage('Sin resultados');
    }

    public function builder(): Builder
    {
        return Area::query()
            ->where('company_id','=', $this->company_id);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable()
                ->excludeFromColumnSelect(),
            Column::make("Fecha Creación", "created_at")
                ->sortable(),
            Column::make("Fecha Modificación", "updated_at")
                ->sortable(),
            Column::make('Acciones', 'acciones')
                ->label(
                    fn ($row)  => '<button onclick="location.href = \'/area/'.$row->id .'\'"class="py-2 px-3 border rounded-lg"><i class="fa-regular fa-eye text-green-600"></i></button>
                    <button onclick="location.href = \'/area/'.$row->id .'/edit\'"class="py-2 px-3 border rounded-full"><i class="fa-solid fa-pen-to-square text-blue-600"></i></button>
                    <button onclick="validateDelete('.$row->id.',\''.$row->name.'\')" class="py-2 px-3 border""><i class="fa-solid fa-trash b text-red-600"></i></button>'
                ) 
                ->excludeFromColumnSelect()
                ->html(),
        ];
    }
}
