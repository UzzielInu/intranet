<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
