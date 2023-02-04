<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taches extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'duree',
        'jour1',
        'jour2',
        'jour3',
        'jour4',
        'jour5',
        'jour6',
        'jour7',
    ];
}
