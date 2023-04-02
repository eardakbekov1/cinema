<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['id', 'name', 'cinema_id'];

    public function cinema(): BelongsTo
    {
        return $this->belongsTo(Cinema::class);
    }

    public function HallMovieSeatSessions(): HasMany
    {
        return $this->hasMany(HallMovieSeatSession::class);
    }
}
