<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SheetNumber;

class SheetNumberTable extends DataTableComponent
{
    protected $model = SheetNumber::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Sheet number", "sheet_number")
                ->sortable(),
            Column::make("Administrative unit id", "administrativeUnit.name")
                ->sortable(),
            Column::make("Expense type id", "expenseType.name")
                ->sortable(),
            Column::make("User id", "user.name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Subject", "subject")
                ->sortable(),
            Column::make("Receiver", "receiver")
                ->sortable(),
        ];
    }
}
