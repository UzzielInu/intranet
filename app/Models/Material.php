<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item',
        'quantity',
        'description',
        'location',
        'origin',
        'created_at',
        'updated_at',
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
