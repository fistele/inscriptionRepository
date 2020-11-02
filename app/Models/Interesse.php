<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Interesse extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        "firstname", "lastname", "phone", "filiere", "email", "date_creation"
    ];
}
