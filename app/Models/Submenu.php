<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submenu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'mnemonic',
        'created_at',
        'updated_at',
    ];

    public function setMnemonicAttribute($value)
    {
        $this->attributes['mnemonic'] = strtoupper($value);
    }

    public function administrativeUnit(): BelongsTo
    {
        return $this->belongsTo(AdministrativeUnit::class);
    }
}
