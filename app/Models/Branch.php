<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code_phone',
        'phone',
        'street',
        'city_id',
        'zip_code',
        'open_workday',
        'close_workday',
        'open_sunday',
        'close_sunday',
        'google_maps',
        'image',
    ];

    public function city() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function state() {
        return $this->hasOneThrough(State::class, City::class, 'id', 'id', 'city_id', 'state_id');
    }
}
