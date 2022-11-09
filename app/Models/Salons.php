<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salons extends Model
{
protected $fillable = [
    'name',
    'about',
    'cep',
    'phone',
    'city_id',
    'whatsapp',
    'status',
    'rua',
    'number',
    'bairro',
    'latitude',
    'longitute',
];
}
