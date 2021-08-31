<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public const TO_SERPUKHOV = 0;

    public const TO_MOSCOW = 1;
}
