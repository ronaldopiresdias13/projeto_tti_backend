<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ServiceSalon extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "service_id",
        "salon_id",
        "price",
    ];
    protected $hidden = ['deleted_at'];
}
