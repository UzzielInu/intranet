<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'partner',
        'date',
        'activities',
        'missing',
        'status',
        'payment_type',
        'signature_name',
        'signature',
        'arrival',
        'exit',
        'total_work',
        'area_id',
        'created_at',
        'updated_at',
    ];

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
