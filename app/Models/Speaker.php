<?php

namespace App\Models;

use App\Casts\ImageCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "l_name",
        "abbreviation",
        "position",
        "avatar"
    ];

    protected $casts = [
        "avatar" => ImageCast::class,
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
