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

    public function getLastName(){
        return $this->attributes['lastname'];
    }
    public function getFirstName(){
        return $this->attributes['firstname'];
    }
    public function getPhone(){
        return $this->attributes['phone'];
    }
    public function getFiliere(){
        return $this->attributes['filiere'];
    }
    public function getEmail(){
        return $this->attributes['email'];
    }
    public function getDateAdhesion(){
        return date("d M Y", $this->attributes['date_creation']);
    }
}
