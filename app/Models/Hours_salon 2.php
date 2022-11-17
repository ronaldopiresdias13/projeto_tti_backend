<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hours_salon extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'day',
        'strat_day',
        'end_day',
        'salons_id'
    ];

    protected $hidden = [
        'deleted_at' 
    ];

}
