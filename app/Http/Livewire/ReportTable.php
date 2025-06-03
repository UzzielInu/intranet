<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Report;

class ReportTable extends DataTableComponent
{
    protected $model = Report::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Partner", "partner")
                ->searchable()
                ->sortable(),
            Column::make("Date", "date")
                ->sortable(),
            Column::make("Activities", "activities")
                ->sortable(),
            Column::make("Missing", "missing")
                ->sortable(),
            Column::make("Status", "status")
                ->searchable()
                ->sortable(),
            Column::make("Signature name", "signature_name")
                ->sortable(),
            Column::make("Signature", "signature")
                ->sortable(),
            Column::make("Arrival", "arrival")
                ->sortable(),
            Column::make("Exit", "exit")
                ->sortable(),
            Column::make("Total work", "total_work")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
