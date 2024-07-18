<?php

namespace App\Models;

use App\Casts\ImageCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $casts = [
        "logo" => ImageCast::class,
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
