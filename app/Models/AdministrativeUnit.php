<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdministrativeUnit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'local_id',
        'name',
        'mnemonic',
        'type',
        'created_at',
        'updated_at',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

    public function setMnemonicAttribute($value)
    {
        $this->attributes['mnemonic'] = strtoupper($value);
    }

    public function submenus(): HasMany
    {
        return $this->hasMany(Submenu::class);
    }

    public function sheetNumbers(): HasMany
    {
        return $this->hasMany(SheetNumber::class);
    }
}
