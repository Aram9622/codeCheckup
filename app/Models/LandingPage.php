<?php

namespace App\Models;

use App\Casts\ImageCast;
use App\Casts\JsonCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        "section"
    ];

    protected $casts = [
        // "media" => ImageCast::class,
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
