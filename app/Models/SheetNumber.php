<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SheetNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'sheet_number',
        'subject',
        'receiver',
        'consecutive_number',
        'administrative_unit_id',
        'expense_type_id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function administrativeUnit(): BelongsTo
    {
        return $this->belongsTo(AdministrativeUnit::class);
    }

    public function expenseType(): BelongsTo
    {
        return $this->belongsTo(ExpenseType::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
