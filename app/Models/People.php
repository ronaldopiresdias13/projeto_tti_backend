<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "name",
        "Date",
        "photo",
        "cpf",
        "gender",
        "user_id",
        "phone",
        "cep",
        "city_id",
    ];
    protected $hidden = ['deleted_at'];
}
