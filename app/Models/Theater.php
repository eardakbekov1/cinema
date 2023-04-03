<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    protected $fillable = ['id', 'name'];

    public function halls(): HasMany
    {
        return $this->hasMany(Hall::class);
    }
}
